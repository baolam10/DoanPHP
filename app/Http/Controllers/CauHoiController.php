<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHoi = CauHoi::all();
        return view('cau-hoi.danh-sach', compact('listCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLinhVuc = LinhVuc::all();
        return view('cau-hoi.form', compact('listLinhVuc'));
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
            'noi_dung'=>'required',
            'linh_vuc'=>'required',
            'phuong_an_a'=>'required',
            'phuong_an_b'=>'required',
            'phuong_an_c'=>'required',
            'phuong_an_d'=>'required',
            'dap_an'=>'required'
        ],[
            'noi_dung.required'=>'Bạn chưa nhập nội dung của câu hỏi',
            'linh_vuc.required'=>'Bạn chưa chọn lĩnh vực của câu hỏi',
            'phuong_an_a.required'=>'Bạn chưa nhập đáp án A',
            'phuong_an_b.required'=>'Bạn chưa nhập đáp án B',
            'phuong_an_c.required'=>'Bạn chưa nhập đáp án C',
            'phuong_an_d.required'=>'Bạn chưa nhập đáp án D',
            'dap_an.required'=>'Bạn chưa nhập đáp án'
        ]);
        $cauHoi = new CauHoi;
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach')->with(['flash_message' => 'Thêm câu hỏi thành công !']);;
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
        $cauHoi = CauHoi::find($id);
        $listLinhVuc = LinhVuc::all();
        return view('cau-hoi.form', compact('cauHoi','listLinhVuc'));
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
            'noi_dung'=>'required',
            'linh_vuc'=>'required',
            'phuong_an_a'=>'required',
            'phuong_an_b'=>'required',
            'phuong_an_c'=>'required',
            'phuong_an_d'=>'required',
            'dap_an'=>'required'
        ],[
            'noi_dung.required'=>'Bạn chưa nhập nội dung của câu hỏi',
            'linh_vuc.required'=>'Bạn chưa chọn lĩnh vực của câu hỏi',
            'phuong_an_a.required'=>'Bạn chưa nhập đáp án A',
            'phuong_an_b.required'=>'Bạn chưa nhập đáp án B',
            'phuong_an_c.required'=>'Bạn chưa nhập đáp án C',
            'phuong_an_d.required'=>'Bạn chưa nhập đáp án D',
            'dap_an.required'=>'Bạn chưa nhập đáp án'
        ]);
        
        $cauHoi = CauHoi::find($id);
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach')->with(['flash_message' => 'Cập nhật câu hỏi thành công !']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHoi = CauHoi::find($id);
        $cauHoi->delete();

        return redirect()->route('cau-hoi.danh-sach')->with(['flash_message' => 'Xóa câu hỏi thành công !']);;
    }
}
