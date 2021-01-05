<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->role == User::SUPER_ADMIN) {
            $users = User::all();
        }
        return view('user.user-index', compact('users'));
    }

    public function createUser()
    {
        return view('user.user-create');
    }

    public function storeUser(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
            'address' => 'required',
            'name' => 'required',
            'role' => 'required',
            'gender' => 'required',
        ]);
        if (!$validate) {
            return redirect()->back();
        }
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->name = $request->name;
        $user->role = $request->role;
        $user->gender = $request->gender;
        $user->save();
        return view('user.user-index');
    }

    public function editUser($id)
    {
        $user = User::query()->findOrFail($id);
        return view('user.user-edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::query()->findOrFail($id);
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->address = $request->address;
        $user->name = $request->name;
        $user->role = $request->role;
        $user->gender = $request->gender;
        $user->save();
    }

    public function deleteUser($id)
    {
        try {
            DB::beginTransaction();
            User::query()->findOrFail($id)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
