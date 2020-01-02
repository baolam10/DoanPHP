<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
use App\LichSuMuaCredit;

class LichSuMuaCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLichSuCredit = LichSuMuaCredit::all();
        return view('lich-su-mua-credit.danh-sach', compact('listLichSuCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lich-su-mua-credit.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lichsuCredit = new LichSuMuaCredit;
        $lichsuCredit->nguoi_choi_id = $request->nguoi_choi_id;
        $lichsuCredit->goi_credit_id = $request->goi_credit_id;
        $lichsuCredit->credit = $request->credit;
        $lichsuCredit->so_tien = $request->so_tien;
        $lichsuCredit->save();

        return redirect()->route('lich-su-mua-credit.danh-sach')->with(['flash_message' => 'Thêm lịch sử mua gói Credit thành công !']);;
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
        $lichsuCredit = LichSuMuaCredit::find($id);
        return view('lich-su-mua-credit.form', compact('lichsuCredit'));
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
        $lichsuCredit = LichSuMuaCredit::find($id);
        $lichsuCredit->nguoi_choi_id = $request->nguoi_choi_id;
        $lichsuCredit->goi_credit_id = $request->goi_credit_id;
        $lichsuCredit->credit = $request->credit;
        $lichsuCredit->so_tien = $request->so_tien;
        $goiCredit->save();

        return redirect()->route('lich-su-mua-credit.danh-sach')->with(['flash_message' => 'Cập nhật lịch sử mua gói Credit thành công !']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lichsuCredit = LichSuMuaCredit::find($id);
        $lichsuCredit->delete();

        return redirect()->route('lich-su-mua-credit.danh-sach')->with(['flash_message' => 'Xóa lịch sử mua gói Credit thành công !']);;
    }
}