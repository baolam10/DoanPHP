<?php

namespace App\Http\Controllers;
use App\QuanTriVien;

use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $listQuanTriVien = QuanTriVien::all();
        return view('trangchu.trangchu', compact($listQuanTriVien));
    }
}