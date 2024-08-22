<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    use HasFactory;

    protected $table = 'khachhang';
    protected $fillable = ['kh_matkhau', 'kh_ten', 'kh_gioitinh', 'kh_diachi', 'kh_dienthoai', 'kh_email', 'kh_ngaysinh', 'kh_thangsinh', 'kh_namsinh', 'kh_cmnd', 'kh_makichhoat', 'kh_trangthai', 'kh_quantri'];
    protected $guarded = ['kh_tendangnhap'];
    protected $primaryKey = 'kh_tendangnhap';

    public $timestamps = false;

    public function danhsach_dondathang() {
        return $this->hasMany('App\Models\Dondathang', 'kh_tendangnhap', 'kh_tendangnhap');
    }
}
