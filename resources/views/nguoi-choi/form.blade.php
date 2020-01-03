@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($nguoichoi)) Cập nhật @else Thêm @endif người dùng</h4>

                @if(isset($nguoichoi))
                <form action="{{ route('nguoi-choi.xu-ly-cap-nhat', ['id' => $nguoichoi->id]) }}" method="POST">
                @else

                <form action="{{ route('nguoi-choi.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($nguoichoi)) value="{{ $nguoichoi->ten_dang_nhap }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="mat_khau">Mật khẩu</label>
                        <input type="text" class="form-control" id="mat_khau" name="mat_khau" @if(isset($nguoichoi)) value="{{ $nguoichoi->mat_khau }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" @if(isset($nguoichoi)) value="{{ $nguoichoi->email }}" @endif>
                    </div>

                     <div class="form-group">
                        <label for="hinh_dai_dien">Email</label>
                        <input type="text" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien" @if(isset($nguoichoi)) value="{{ $nguoichoi->hinh_dai_dien }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="diem_cao_nhat">Điểm cao nhất</label>
                        <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat" @if(isset($nguoichoi)) value="{{ $nguoichoi->diem_cao_nhat }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="text" class="form-control" id="credit" name="credit" @if(isset($nguoichoi)) value="{{ $nguoichoi->credit }}" @endif>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($nguoichoi)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection