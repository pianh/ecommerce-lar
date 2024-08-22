<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khuyenmai extends Model
{
    use HasFactory;
    protected $table = 'khuyenmai';
    protected $fillable = ['km_ten', 'kh_noidung', 'kh_tungay', 
                            'km_denngay'];
    protected $guarded = ['km_ma'];
    protected $primaryKey = 'km_ma';

    protected $dates = ['kh_tungay', 'km_denngay'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public $timestamps = false;

    
    public function danhsach_sanpham() {
        return $this->hasMany('App\Models\Sanpham', 'km_ma', 'km_ma');
    }
}
