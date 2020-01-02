@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($lichsuCredit)) Cập nhật @else Thêm @endif lịch sử mua Credit</h4>

                @if(isset($lichsuCredit))
                <form action="{{ route('lich-su-mua-credit.xu-ly-cap-nhat', ['id' => $lichsuCredit->id]) }}" method="POST">
                @else

                <form action="{{ route('lich-su-mua-credit.xu-ly-them-moi') }}" method="POST">
                @endif
                	@csrf
                    <div class="form-group">
                        <label for="nguoi_choi_id">Người chơi ID</label>
                        <input type="text" class="form-control" id="nguoi_choi_id" name="nguoi_choi_id" @if(isset($lichsuCredit)) value="{{ $lichsuCredit->nguoi_choi_id }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="goi_credit">Gói credit</label>
                        <select class="custom-select" id="goi_credit" name="goi_credit">
                            <option>Chọn gói credit</option>
                            @foreach($listGoiCredit as $goiCredit)
                            <option @if(isset($lichsuCredit)) @if($goiCredit->id == $lichsuCredit->goi_credit_id) selected 
                                @endif
                                value="{{$goiCredit->id}}">{{$goiCredit->ten_goi}}
                            </option>
                            @endif
                            value="{{$goiCredit->id}}">{{$goiCredit->ten_goi}}
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="text" class="form-control" id="credit" name="credit" @if(isset($lichsuCredit)) value="{{ $lichsuCredit->credit }}" @endif>
                    </div>

                     <div class="form-group">
                        <label for="so_tien">Số tiền</label>
                        <input type="text" class="form-control" id="so_tien" name="so_tien" @if(isset($lichsuCredit)) value="{{ $lichsuCredit->so_tien }}" @endif>
                    </div>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($lichsuCredit)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection