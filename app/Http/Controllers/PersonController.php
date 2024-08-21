<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //action index
    public function index () {
        //Xử lý
        $dtb = (5 + 8 + 7) / 3;
        $hoten = "Nguyễn Duy Anh";
        $gioitinh = 1; // #1. Nam, #2. Nữ
        $dangnhap = true;
        $danhsachsv = [
            [
                'sv_ma' => 'SV001',
                'sv_hoten' => 'Duy Anh'
            ],
            [
                'sv_ma' => 'SV002',
                'sv_hoten' => 'Thùy Mỵ'
            ],
        ];
        return view('gioi-thieu-ban-than')
            ->with('danhsachsv', $danhsachsv)
            ->with('dtb',$dtb)
            ->with('hoten', $hoten)
            ->with('gioitinh', $gioitinh)
            ->with('dangnhap', $dangnhap);
    }
}
