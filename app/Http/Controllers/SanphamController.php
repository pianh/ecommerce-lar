<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Loaisanpham;
use App\Models\Nhasanxuat;
use App\Models\Khuyenmai;

class SanphamController extends Controller
{
    //action index
    public function index() {
        $dsSanPham = Sanpham::all();

        return view('sanpham/index')
                ->with('dsSanPham', $dsSanPham);
    }

    //action edit
    public function edit(Request $request) {
        $editingRow = Sanpham::find($request->sp_ma);
        $dsLoaisanpham = Loaisanpham::all();
        $dsNhasanxuat = Nhasanxuat::all();
        $dsKhuyenmai = Khuyenmai::all();

        return view('sanpham/edit')
                ->with('dsLoaisanpham', $dsLoaisanpham)
                ->with('dsNhasanxuat', $dsNhasanxuat)
                ->with('dsKhuyenmai', $dsKhuyenmai)
                ->with('editingRow', $editingRow);
    }

    //action create
    public function create() {
        $dsLoaisanpham = Loaisanpham::all();
        $dsNhasanxuat = Nhasanxuat::all();
        $dsKhuyenmai = Khuyenmai::all();

        return view('sanpham/create')
                ->with('dsLoaisanpham', $dsLoaisanpham)
                ->with('dsNhasanxuat', $dsNhasanxuat)
                ->with('dsKhuyenmai', $dsKhuyenmai);
    }

    //action delete
    public function destroy(Request $request) {
      $deletingRow = Sanpham::find($request->lsp_ma);
      $deletingRow->destroy($request->lsp_ma);
      //Laravel phiên bản 11 có thêm xóa hàng loạt

      //Điều hướng về trang danh sách
      return redirect( route('sanpham.index') );
    }


    //action save
    public function save(Request $request) {
        $newRecord = new Sanpham();
        $newRecord->sp_ten = $request->sp_ten;
        $newRecord->sp_gia = $request->sp_gia;
        $newRecord->sp_giacu = $request->sp_giacu;
        $newRecord->sp_mota_ngan = $request->sp_mota_ngan;
        $newRecord->sp_mota_chitiet = $request->sp_mota_chitiet;
        $newRecord->sp_ngaycapnhat = date('Y-m-d H:i:s');
        $newRecord->sp_soluong = $request->sp_soluong;
        $newRecord->lsp_ma = $request->lsp_ma;
        $newRecord->nsx_ma = $request->nsx_ma;
        if( isset($request->km_ma) && !empty($request->km_ma) ) {
            $newRecord->km_ma = $request->km_ma;
        } else {
           $newRecord->km_ma = null; 
        }
        $newRecord->save();

        //Điều hướng về tranh danh sách
        return redirect(route('sanpham.index'));
    }

    //action save
    public function update(Request $request) {
        $newRecord = Sanpham::find($request->sp_ma);
        $newRecord->sp_ten = $request->sp_ten;
        $newRecord->sp_gia = $request->sp_gia;
        $newRecord->sp_giacu = $request->sp_giacu;
        $newRecord->sp_mota_ngan = $request->sp_mota_ngan;
        $newRecord->sp_mota_chitiet = $request->sp_mota_chitiet;
        $newRecord->sp_ngaycapnhat = date('Y-m-d H:i:s');
        $newRecord->sp_soluong = $request->sp_soluong;
        $newRecord->lsp_ma = $request->lsp_ma;
        $newRecord->nsx_ma = $request->nsx_ma;
        if( isset($request->km_ma) && !empty($request->km_ma) ) {
            $newRecord->km_ma = $request->km_ma;
        } else {
           $newRecord->km_ma = null; 
        }
        $newRecord->save();

        //Điều hướng về tranh danh sách
        return redirect(route('sanpham.index'));
    }
}
