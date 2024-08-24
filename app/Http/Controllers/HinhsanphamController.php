<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Hinhsanpham;

use Storage;
use Session;

class HinhsanphamController extends Controller
{
    //action create
    public function create() {
        $dsSanpham = Sanpham::all();

        return view('hinhsanpham/create')
                ->with('dsSanpham', $dsSanpham);
    }
    //action save
    public function save(Request $request) {
        $sp_ma = $request->sp_ma;

        //Kiểm tra xem người dùng có chọn tập tin không?
        if($request->hasFile('hsp_tentaptin')) {
            $fileUploaded = $request->hsp_tentaptin;
            //dd($sp_ma, $fileUploaded); //debug dump then die;
            $nowDateTime = date('Ymd_His'); //20240824_205033
            $nameOrinal = $fileUploaded->getClientOriginalName(); //abc.png
            $newName = $nowDateTime . '_' . $nameOrinal;

            //1. Di chuyển file vào thư mục mong đợi
            $fileUploaded->storeAs('public/uploads', $newName);
            //2. INSERT dòng vào database 
            $newRecord = new Hinhsanpham();
            $newRecord->sp_ma = $sp_ma;
            $newRecord->hsp_tentaptin = $newName;
            $newRecord->save();

            //Điều hướng về Route Index
            return redirect( route('hinhsanpham.index') );
        }                  
    }

    //action index
    public function index() {
        $dsHinhsanpham = Hinhsanpham::all();
        return view('hinhsanpham/index')
                ->with('dsHinhsanpham', $dsHinhsanpham);
    }

    //action edit
    public function edit(Request $request) {
        $hsp_ma = $request->hsp_ma;
        $dsSanpham = Sanpham::all();
        $hinhSanphamCu = Hinhsanpham::find($hsp_ma);

        return view('hinhsanpham/edit')
                ->with('dsSanpham', $dsSanpham)
                ->with('hinhSanphamCu', $hinhSanphamCu);
    }
    //action update
    public function update(Request $request) {
        $hsp_ma = $request->hsp_ma;
        $hinhSanPhamMuonSua = Hinhsanpham::find($hsp_ma);
        $hinhSanPhamMuonSua->sp_ma = $request->sp_ma;

        //Nếu có chọn hình -> thì xử lý hình
        if($request->hasFile('hsp_tentaptin')) {
            //XÓA FILE RÁC KHÔNG CÒN SỬ DỤNG NỮA
            Storage::delete('public/uploads/' . $hinhSanPhamMuonSua->hsp_tentaptin );
            
            $fileUploaded = $request->hsp_tentaptin;
            //dd($sp_ma, $fileUploaded); //debug dump then die;
            $nowDateTime = date('Ymd_His'); //20240824_205033
            $nameOrinal = $fileUploaded->getClientOriginalName(); //abc.png
            $newName = $nowDateTime . '_' . $nameOrinal;

            //1. Di chuyển file vào thư mục mong đợi
            $fileUploaded->storeAs('public/uploads', $newName);
            //2. Cập nhật dữ liệu hình trong database
            $hinhSanPhamMuonSua->hsp_tentaptin = $newName;

        }
        $hinhSanPhamMuonSua->save();

        //Điều hướng về route index
        return redirect(route('hinhsanpham.index'));
    }
    // Action destroy
    public function destroy(Request $request) {
        $hsp_ma = $request->hsp_ma;
        $hinhSanPhamMuonXoa = Hinhsanpham::find($hsp_ma);

        //Nhớ xóa file rác không còn dùng nữa
        Storage::delete('public/uploads/' . $hinhSanPhamMuonXoa->hsp_tentaptin);

        $hinhSanPhamMuonXoa->destroy($hsp_ma);

        //Điều hướng về route index
        return redirect(route('hinhsanpham.index'));
    }
}
