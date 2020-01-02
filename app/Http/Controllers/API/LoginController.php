<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function dangNhap(Request $req)
    {
    	$credentials = [
    		'ten_dang_nhap' => $req->ten_dang_nhap,
    		'password' => $req->mat_khau
    	];

    	//Chứng thực
    	if(!$token = auth('api')->attempt($credentials)) {
    		// sai tên đăng nhâp || mật khẩu
    		return response()->json([
    			'status' =>false,
    			'message' => 'Unauthorized.'
    		], 401);
    	}

    	//Chứng thực thành công 
    	return response()->json([
    		'status' =>true,
    		'message' => 'Authorized.',
    		'token' => $token,
    		'type' =>'bearer',
    		'expires' =>auth('api')->factory()->getTTL() *60
    	], 200);
    }

    public function layThongTin()
    {
        return auth('api')->user();
    }
}
