<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Satuan_produk extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
 
    protected static function boot(){
        parent::boot();
    
        static::created(function ($model) {
        $model->kode_nama = "SB00" . $model->id;
        $model->save();
        });
    }
}
