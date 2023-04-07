<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    public function image(){
        return $this->belongsTo(\App\Model\image::class,"image");
    }
    public function achat(){
        return $this->hasOne(\App\Models\achat::class,"id_visitor");
    }
}
