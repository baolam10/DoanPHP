<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo ="trang-chu";

    public function dangNhap()
    {
        return view('dang-nhap');
    }

    public function xuLyDangNhap(Request $request)
    {

        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap'=> $ten_dang_nhap,'password'=>$mat_khau]))
        {
            return redirect()->route('trang-chu');
        }
  
            
            return "dang nhap that bai";
       
        
    }

    public function layThongTin(){
        return Auth::user();
    }

    public function dangXuat(){
         Auth::logout();
         return redirect()->route('dang-nhap');
    }

    public function index()
    {
        $listQuanTriVien = QuanTriVien::all();
        return view('quan-tri-vien.danh-sach', compact('listQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quan-tri-vien.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ten_dang_nhap' => 'required|unique:quan_tri_vien',
            'mat_khau' => 'required|max:20|min:6',
            'ho_ten' => 'required'
        ], [
            'ten_dang_nhap.required' => 'Bạn chưa nhập tên đăng nhập',
            'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại.',          
            'mat_khau.required' => 'Bạn chưa nhập mật khẩu.',
            'mat_khau.min' => 'Mật khẩu phải lớn hơn 6 kí tự.',
            'mat_khau.max' => 'Mật khẩu phải nhỏ hơn 20 kí tự.',
            'ho_ten.required' => 'Bạn chưa nhập họ và tên.'
        ]);
        $quantrivien = new QuanTriVien;
        $quantrivien->ten_dang_nhap = $request->ten_dang_nhap;
        $quantrivien->mat_khau = $request->mat_khau;
        $quantrivien->ho_ten = $request->ho_ten;
        $quantrivien->save();

        return redirect()->route('quan-tri-vien.danh-sach')->with(['flash_message' => 'Thêm gói credit thành công !']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quantrivien = QuanTriVien::find($id);
        return view('quan-tri-vien.form', compact('quantrivien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ten_dang_nhap' => 'required|unique:quan_tri_vien',
            'mat_khau' => 'required|max:20|min:6',
            'ho_ten' => 'required'
        ], [
            'ten_dang_nhap.required' => 'Bạn chưa nhập tên đăng nhập',
            'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại.',         
            'mat_khau.required' => 'Bạn chưa nhập mật khẩu.',
            'mat_khau.min' => 'Mật khẩu phải lớn hơn 6 kí tự.',
            'mat_khau.max' => 'Mật khẩu phải nhỏ hơn 20 kí tự.',
            'ho_ten.required' => 'Bạn chưa nhập họ và tên.'
        ]);
        $quantrivien = QuanTriVien::find($id);
        $quantrivien->ten_dang_nhap = $request->ten_dang_nhap;
        $quantrivien->mat_khau = bcrypt($request->mat_khau);
        $quantrivien->ho_ten = $request->ho_ten;
        $quantrivien->save();
        return redirect()->route('quan-tri-vien.danh-sach')->with(['flash_message' => 'Cập nhật quản trị thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quantrivien = QuanTriVien::find($id);
        $quantrivien->delete();
        return redirect()->route('quan-tri-vien.danh-sach')->with(['flash_message' => 'Xóa quản trị thành công !']);
    }
}
