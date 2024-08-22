<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;

    protected $table = 'sanpham';
    protected $fillable = ['sp_ma','sp_ten', 'sp_gia', 'sp_giacu', 
                            'sp_mota_ngan', 'sp_mota_chitiet', 'sp_ngaycapnhat', 'sp_soluong', 'lsp_ma', 'nsx_ma', 'km_ma'];
    protected $guarded = ['sp_ma'];
    protected $primaryKey = 'sp_ma';

    protected $dates = ['sp_ngaycapnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public $timestamps = false;

    public function chitiet_dondathang(){
        return $this->hasMany('App\Models\SanphamDondathang', 'sp_ma', 'sp_ma');
    }
    
    public function danhsach_hinhsanpham() {
        return $this->hasMany('App\Models\Hinhsanpham', 'sp_ma', 'sp_ma');
    }

    public function khuyenmai() {
        return $this->belongsTo('App\Models\Loaisanpham', 'km_ma', 'km_ma');
    }

    public function loaisanpham() {
        return $this->belongsTo('App\Models\Loaisanpham', 'lsp_ma', 'lsp_ma');
    }

    public function nhasanxuat() {
        return $this->belongsTo('App\Models\Nhasanxuat', 'nsx_ma', 'nsx_ma');
    }
}
