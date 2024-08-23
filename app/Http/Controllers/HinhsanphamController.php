<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Hinhsanpham;

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
}
