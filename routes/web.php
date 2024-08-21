<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\LoaisanphamController;
use App\Http\Controllers\LienheController;

Route::get('/lien-he',[LienheController::class, 'index']);

Route::get('/danh-sach-loai-sp/create', [LoaisanphamController::class, 'create'])->name('loaisanpham.create');
Route::post('/danh-sach-loai-sp/save',[LoaisanphamController::class, 'save'])->name('loaisanpham.save');

Route::get('/danh-sach-loai-sp', [LoaisanphamController::class, 'index'])->name('loaisanpham.index');
                                    //controller            action
Route::get('/danh-sach-sv', [SinhVienController::class, 'danh_sach']);

Route::get('/dang-ky-hoc', [SinhVienController::class, 'dang_ky_hoc']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/gioi-thieu', function() {
    return 'Hello routing trang giới thiệu';
});

Route::get('/tuyen-dung', function() {
    return 'Yêu cầu dễ quá, Router tự xử lý được';
});

Route::get('/gioi-thieu-ban-than', [PersonController::class,'index']);