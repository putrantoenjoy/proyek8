<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan_produk extends Model
{
    use HasFactory;
    protected $guarded = [];
 
    protected static function boot(){
        parent::boot();
    
        static::created(function ($model) {
        $model->kode_nama = "SB00" . $model->id;
        $model->save();
        });
    }
}
