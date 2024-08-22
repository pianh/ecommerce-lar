<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dondathang extends Model
{
    use HasFactory;

    protected $table = 'dondathang';
    protected $fillable = ['dh_ngaylap', 'dh_ngaygiao', 'dh_noigiao', 
                            'dh_trangthaithanhtoan', 'httt_ma', 'kh_tendangnhap'];
    protected $guarded = ['dh_ma'];
    protected $primaryKey = 'dh_ma';

    protected $dates = ['dh_ngaylap', 'dh_ngaygiao'];
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $timestamps = false;

    public function chitiet_dondathang(){
        return $this->hasMany('App\Models\SanphamDondathang', 'dh_ma', 'dh_ma');
    }

    public function khachhang(){
        return $this->belongsTo('App\Models\Khachhang', 'kh_tendangnhap', 'kh_tendangnhap');
    }
    public function hinhthucthanhtoan(){
        return $this->belongsTo('App\Models\Hinhthucthanhtoan', 'httt_ma', 'httt_ma');
    }
}
