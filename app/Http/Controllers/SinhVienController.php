<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    //Nhiều action
    public function danh_sach() {
        //Tính toán ...
        return view('danhsachsinhvien');
    }

    public function dang_ky_hoc() {
        return response()->json([
            'sv_ma' => 'SV001',
            'sv_ten' => 'Duy Anh'
        ]);
    }
}
