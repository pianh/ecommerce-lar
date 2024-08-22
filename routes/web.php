<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\LoaisanphamController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\SanphamController;

Route::get('/lien-he',[LienheController::class, 'index']);

//Route San pham
Route::get('/sanpham', [SanphamController::class, 'index']);
Route::get('/sanpham/edit', [SanphamController::class, 'edit'])->name('sanpham.edit');
Route::post('/sanpham/delete', [SanphamController::class, 'destroy'])->name('sanpham.delete');
Route::get('/sanpham/create', [SanphamController::class, 'create'])->name('sanpham.create');
Route::get('/sanpham/save', [SanphamController::class, 'save'])->name('sanpham.save');

// Route loai san pham
Route::post('/danh-sach-lsp/update',[LoaisanphamController::class, 'update'])->name('loaisanpham.update');
Route::get('/danh-sach-lsp/edit',[LoaisanphamController::class, 'edit'])->name('loaisanpham.edit');
Route::post('/danh-sach-lsp/delete', [LoaisanphamController::class, 'destroy'])->name('loaisanpham.delete');
Route::get('/danh-sach-lsp/create', [LoaisanphamController::class, 'create'])->name('loaisanpham.create');
Route::post('/danh-sach-lsp/save',[LoaisanphamController::class, 'save'])->name('loaisanpham.save');
Route::get('/danh-sach-lsp', [LoaisanphamController::class, 'index'])->name('loaisanpham.index');

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