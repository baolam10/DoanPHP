<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listGoiCredit = GoiCredit::all();
        return view('goi-credit.danh-sach', compact('listGoiCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goi-credit.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ten_goi'=>'required',
            'credit'=>'required|numeric',
            'so_tien'=>'required|numeric'
        ],[
            'ten_goi.required'=>'Bạn chưa nhập tên gói',
            'credit.required'=>'Bạn chưa nhập credit',
            'credit.numeric'=>'Số credit không hợp lệ',
            'so_tien.required'=>'Bạn chưa nhập số tiền',
            'so_tien.numeric'=>'Số tiền không hợp lệ'
        ]);

        $goiCredit = new GoiCredit;
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();

        return redirect()->route('goi-credit.danh-sach')->with(['flash_message' => 'Thêm gói credit thành công !']);;
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
        $goiCredit = GoiCredit::find($id);
        return view('goi-credit.form', compact('goiCredit'));
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
        $this->validate($request,[
            'ten_goi'=>'required',
            'credit'=>'required|numeric',
            'so_tien'=>'required|numeric|max:100000000|min:0'
        ],[
            'ten_goi.required'=>'Bạn chưa nhập tên gói',
            'credit.required'=>'Bạn chưa nhập credit',
            'credit.numeric'=>'Số credit không hợp lệ',
            'so_tien.min' => 'Bạn phải nhập số tiền trên 0',
            'so_tien.max' => 'Bạn phải nhập số tiền nhỏ hơn 100000000',
            'so_tien.required'=>'Bạn chưa nhập số tiền',
            'so_tien.numeric'=>'Số tiền không hợp lệ'
        ]);

        $goiCredit = GoiCredit::find($id);
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();

        return redirect()->route('goi-credit.danh-sach')->with(['flash_message' => 'Cập nhật gói credit thành công !']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goiCredit = GoiCredit::find($id);
        $goiCredit->delete();

        return redirect()->route('goi-credit.danh-sach')->with(['flash_message' => 'Xóa gói credit thành công !']);;
    }
}
