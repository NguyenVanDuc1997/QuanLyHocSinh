@extends('home')
@section('body')
    <div class="container">
        <a href="{{route('user.create')}}" class="btn btn-success">Thêm mới</a>
        <div>&nbsp;</div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Số thứ tự</th>
                <th scope="col">Tên</th>
                <th scope="col">email</th>
                <th scope="col">Chức năng</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $index => $user)
                <tr>
                    <th scope="row">{{++$index}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Sửa</a>
                        <a href="{{route('user.delete', $user->id)}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
