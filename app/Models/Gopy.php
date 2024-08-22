<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gopy extends Model
{
    use HasFactory;

    protected $table = 'gopy';
    protected $fillable = ['gy_hoten', 'gy_email', 'gy_diachi', 
                            'gy_dienthoai', 'gy_tieude', 'gy_noidung', 'gy_ngaygopy', 'cdgy_ma'];
    protected $guarded = ['gy_ma'];
    protected $primaryKey = 'gy_ma';

    protected $dates = ['gy_ngaygopy'];
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $timestamps = false;

    public function chude_gopy(){
        return $this->belongsTo('App\Models\Chudegopy', 'cdgy_ma', 'cdgy_ma');
    }
}
