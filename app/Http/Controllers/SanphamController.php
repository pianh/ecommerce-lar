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
        //$request->sp_ma
    }

    //action delete
    public function destroy(Request $request) {
        //$request->sp_ma
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
        //action create
    public function save(Request $request) {
        return view('sanpham/create');
    }
}
