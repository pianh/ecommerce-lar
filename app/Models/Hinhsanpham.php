<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hinhsanpham extends Model
{
    use HasFactory;
    protected $table = 'hinhsanpham';
    protected $fillable = ['hsp_tentaptin', 'sp_ma'];
    protected $guarded = ['hsp_ma'];
    protected $primaryKey = 'hsp_ma';

    public $timestamps = false;

    public function sanpham() {
        return $this->belongsTo('App\Models\Sanpham', 'sp_ma', 'sp_ma');
    }
}
