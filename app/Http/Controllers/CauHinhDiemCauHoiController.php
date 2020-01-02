<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhDiemCauHoi;

class CauHinhDiemCauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHinhDiem = CauHinhDiemCauHoi::all();
        return view('cau-hinh-diem-cau-hoi.danh-sach', compact('listCauHinhDiem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cau-hinh-diem-cau-hoi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHinhDiem = new CauHinhDiemCauHoi;
        $cauHinhDiem->thu_tu = $request->thu_tu;
        $cauHinhDiem->diem = $request->diem;
        $cauHinhDiem->save();

        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach')->with(['flash_message' => 'Thêm cấu hình điểm câu hỏi thành công !']);
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
        $cauHinhDiem = CauHinhDiemCauHoi::find($id);
        return view('cau-hinh-diem-cau-hoi.form', compact('cauHinhDiem'));
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
        $cauHinhDiem = CauHinhDiemCauHoi::find($id);
        $cauHinhDiem->thu_tu = $request->thu_tu;
        $cauHinhDiem->diem = $request->diem;
        $cauHinhDiem->save();

        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach')->with(['flash_message' => 'Cập nhật cấu hình điểm câu hỏi thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHinhDiem = CauHinhDiemCauHoi::find($id);
        $cauHinhDiem->delete();

        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach')->with(['flash_message'=> 'Xóa cấu hình điểm câu hỏi thành công !']);
    }
}