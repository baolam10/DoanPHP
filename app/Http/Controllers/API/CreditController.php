<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class CreditController extends Controller
{
    public function layDanhSach()
    {
    	$listCredit =  GoiCredit::all()->random(3);
    	$result = [
    		'success' => true,
    		'message' => "Dang nhap thanh cong",
    		'data' => $listCredit
    	];
    	return response()->json($result);
    }
}
