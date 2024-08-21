<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loaisanpham;

class LoaisanphamController extends Controller
{
    //Action index
    public function index () {
        //Chuẩn bị dữ liệu -> thực thi -> phân rã khối  dữ liệu thành mảng trong php
        $dsLoaiSanPham = Loaisanpham::all();
        //var_dump($dsLoaiSanPham); die;
        //dd($dsLoaiSanPham); //dump then die DEBUG
        return view('loaisanpham/index')
                ->with('dsLoaiSanPham', $dsLoaiSanPham);

        
        // Chuyển đổi collection thành mảng các thuộc tính cụ thể
        // $attributesArray = $dsLoaiSanPham->map(function ($item) {
        //     return [
        //         'lsp_ma' => $item->lsp_ma,
        //         'lsp_ten' => $item->lsp_ten,
        //         'lsp_mota' => $item->lsp_mota,
        //     ];
        // });

        // return response()->json($attributesArray);
     }

     public function create() {
        return view('loaisanpham/create');
     }
     public function save(Request $request) {
        $newRecord = new Loaisanpham();
        $newRecord->lsp_ten = $request->lsp_ten;
        $newRecord->lsp_mota = $request->lsp_mota;
        //Chuẩn bị câu lệnh INSERT -> Ghép chuỗi vào -> Thực thi
        $newRecord->save();
        //Điều hướng về trang danh sách
        return redirect(route('loaisanpham.index'));
     }
}