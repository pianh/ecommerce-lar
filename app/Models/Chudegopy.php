<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chudegopy extends Model
{
    use HasFactory;

    protected $table = 'chudegopy';
    protected $fillable = ['cdgy_ten'];
    protected $guarded = ['cdgy_ma'];
    protected $primaryKey = 'cdgy_ma';

    protected $timestamps = false;

    public function danhsach_gopy() {
        return $this->hasMany('App\Models\Gopy', 'cdgy_ma', 'cdgy_ma');
    }
}
