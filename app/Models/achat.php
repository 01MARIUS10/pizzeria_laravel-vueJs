<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achat extends Model
{
    use HasFactory;

    protected $filliale = [
        'id_product',
        'id_visitor'
    ];

    public function product(){
        return $this->belongsTo(\App\Models\product::class,"id_product");
    }
    public function visitor(){
        return $this->belongsTo(\App\Models\visitor::class,"id_visitor");
    }
}
