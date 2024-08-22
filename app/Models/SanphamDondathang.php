<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanphamDondathang extends Model
{
    use HasFactory;

    protected $table = 'sanpham_dondathang';
    protected $fillable = ['sp_ma', 'dh_ma', 'sp_dh_soluong', 
                            'sp_dh_dongia'];
    protected $guarded = ['sp_ma', 'dh_ma'];
    protected $primaryKey = ['sp_ma', 'dh_ma'];

    public $timestamps = false;

    public function sanpham() {
        return $this->belongsTo('App\Models\Sanpham', 'sp_ma', 'sp_ma');
    }

    public function donhang() {
        return $this->belongsTo('App\Models\Dondathang', 'dh_ma', 'dh_ma');
    }
}
