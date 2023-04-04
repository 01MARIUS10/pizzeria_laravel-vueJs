<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $table='image';
    public $timestamp=false;
    protected $fillable = ['name','path','type','desc'];
    protected $guard = ['id'];


    public function product(){
        $this->hasOne(\App\product::class,"image");
    }

    public function user(){
        return $this->hasOne(\App\Users::class,"image");
    }

}
