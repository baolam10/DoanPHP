<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;

class NguoiChoiController extends Controller
{
    public function dangKy(Request $req){
    	$nguoiChoi = new NguoiChoi;
    	$nguoiChoi->ten_dang_nhap = $req->ten_dang_nhap;
    	$nguoiChoi->mat_khau = $req->mat_khau;
    	$nguoiChoi->mail = $req->mail;
    	$nguoiChoi->hinh_dai_dien = "avt.jpg";
    	$nguoiChoi->diem_cao_nhat = "0";
    	$nguoiChoi->credit="0";

    	if(NguoiChoi::where('ten_dang_nhap', '=', $req->ten_dang_nhap)->exists()){
    		return response()->json([
    				'status'	=>false,
    				'message'	=>"Tên đăng nhập đã được sử dụng",
    			]);
    	}
    	else{
    	$nguoiChoi->save();
    	return response()->json([
    				'status'	=>true,
    				'message'	=>"Đăng ký thành công",
    			]);
    }
	}
}
