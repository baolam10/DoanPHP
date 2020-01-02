<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhTroGiup;

class CauHinhTroGiupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHinhHelp = CauHinhTroGiup::all();
        return view('cau-hinh-tro-giup.danh-sach', compact('listCauHinhHelp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cau-hinh-tro-giup.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHinhHelp = new CauHinhTroGiup;
        $cauHinhHelp->loai_tro_giup = $request->loai_tro_giup;
        $cauHinhHelp->thu_tu = $request->thu_tu;
        $cauHinhHelp->credit = $request->credit;
        $cauHinhHelp->save();

        return redirect()->route('cau-hinh-tro-giup.danh-sach')->with(['flash_message' => 'Thêm cấu hình trợ giúp thành công !']);
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
        $cauHinhHelp = CauHinhTroGiup::find($id);
        return view('cau-hinh-tro-giup.form', compact('cauHinhHelp'));
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
        $cauHinhHelp = CauHinhTroGiup::find($id);
        $cauHinhHelp->loai_tro_giup = $request->loai_tro_giup;
        $cauHinhHelp->thu_tu = $request->thu_tu;
        $cauHinhHelp->credit = $request->credit;
        $cauHinhHelp->save();

        return redirect()->route('cau-hinh-tro-giup.danh-sach')->with(['flash_message' => 'Cập nhật cấu hình trợ giúp thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHinhHelp = CauHinhTroGiup::find($id);
        $cauHinhHelp->delete();

        return redirect()->route('cau-hinh-tro-giup.danh-sach')->with(['flash_message'=> 'Xóa cấu hình trợ giúp thành công !']);
    }
}
