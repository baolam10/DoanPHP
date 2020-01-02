<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class SendMailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass(); //có thể dùng Model để truy vấn dữ liệu
        $objDemo->nguoi_nhan ='Do Tran Bao Lam';
        $objDemo->noi_sinh = 'Dong Nai';
        $objDemo->nam_sinh = '19..';
        $objDemo->nguoi_gui = 'Hoc vien khoa hoc may tinh';

        Mail::to("dotranbaolam123456789@gmail.com")->send(new DemoMail($objDemo));
    } 
}
