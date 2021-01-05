@extends('home')
@section('body')
    <div class="container">
        <form action="{{route('user.store')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Địa chỉ</label>
                <input type="text" class="form-control" name="address" placeholder="Thôn - Xã - Huyện" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Tên</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Phân quyền</label>
                    <select name="role" class="form-control" required>
                        <option selected value="">Vui lòng chọn</option>
                        <option value="1">Phòng giáo dục huyện</option>
                        <option value="2">Kế toán trường</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Giới tính</label>
                    <select name="gender" class="form-control" required>
                        <option selected value="">Vui lòng chọn</option>
                        <option value="3">Nam</option>
                        <option value="4">Nữ</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>

@endsection
