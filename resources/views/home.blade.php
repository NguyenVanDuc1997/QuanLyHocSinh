@extends('layouts.master')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tạo tài khoản
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Phòng giáo dục huyện</a>
                        <a class="dropdown-item" href="#">Kế toán trường</a>
                        {{--                        <div class="dropdown-divider"></div>--}}
                        {{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.index')}}">Tạo tài khoản<span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                    data-target="#userModal">{{\Illuminate\Support\Facades\Auth::user()->name}}</button>
        </div>
    </nav>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>@yield('body')</div>
@endsection




@include('usermodal')
