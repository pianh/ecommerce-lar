<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hinhthucthanhtoan extends Model
{
    use HasFactory;

    protected $table = 'hinhthucthanhtoan';
    protected $fillable = ['httt_ten'];
    protected $guarded = ['httt_ma'];
    protected $primaryKey = 'httt_ma';

    public $timestamps = false;

    public function danhsach_dondathang() {
        return $this->hasMany('App\Models\Dondathang', 'httt_ma', 'httt_ma');
    }
}
