@extends('home')
@section('body')
    <div class="container">
        <form action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" readonly required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Địa chỉ</label>
                <input type="text" class="form-control" name="address" placeholder="Thôn - Xã - Huyện" value="{{$user->address}}" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Tên</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Phân quyền</label>
                    <select name="role" class="form-control" required>
                        <option value="">Vui lòng chọn</option>
                        <option value="1" @if($user->role == \App\Models\User::PGD) selected @endIf>Phòng giáo dục huyện</option>
                        <option value="2" @if($user->role == \App\Models\User::TRUONG) selected @endIf>Kế toán trường</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Giới tính</label>
                    <select name="gender" class="form-control" required>
                        <option value="">Vui lòng chọn</option>
                        <option value="3" @if($user->gender == \App\Models\User::NAM) selected @endIf>Nam</option>
                        <option value="4" @if($user->gender == \App\Models\User::NU) selected @endIf>Nữ</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>

@endsection
