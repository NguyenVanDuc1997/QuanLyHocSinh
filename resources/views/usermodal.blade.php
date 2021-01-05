<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin người dùng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                <p>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                <p>{{\Illuminate\Support\Facades\Auth::user()->address}}</p>
            </div>
            <div class="modal-footer">
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thông tin</button>--}}
                <a type="button" class="btn btn-primary" href="{{route('logout')}}">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>
