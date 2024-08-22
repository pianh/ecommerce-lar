<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhasanxuat extends Model
{
    use HasFactory;

    protected $table = 'nhasanxuat';
    protected $fillable = ['nsx_ten'];
    protected $guarded = ['nsx_ma'];
    protected $primaryKey = 'nsx_ma';
    public $timestamps = false;

    public function danhsach_sanpham() {
        return $this->hasMany('App\Models\Sanpham', 'nsx_ma', 'nsx_ma');
    }
}
