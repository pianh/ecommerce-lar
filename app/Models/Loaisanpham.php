<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    use HasFactory;

    protected $table = 'loaisanpham';
    protected $fillable = ['lsp_ten', 'lsp_mota'];
    protected $guarded = ['lsp_ma'];
    protected $primaryKey = 'lsp_ma';

    public $timestamps = false;

    public function danhsach_sanpham() {
        return $this->hasMany('App\Models\Sanpham', 'lsp_ma', 'lsp_ma');
    }
}
