<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan_produk extends Model
{
    use HasFactory;
    protected $guarded = [];
 
    protected static function boot(){
        parent::boot();
    
        static::created(function ($model) {
        $model->id = "SP00" . $model->id;
        $model->save();
        });
    }
}
