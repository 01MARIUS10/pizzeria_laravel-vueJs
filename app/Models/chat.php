<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    protected $filliale = [
        'content',
        'id_author',
        'id_visitor',
        'id_user'
    ];

    protected $guarded = ['id'];


    // customize le nom du colonne
    const CREATED_AT = 'creation_date';
    const UPDATE_AT = 'last_update';


    public function visitor(){
        return $this->belongsTo(\App\Models\visitor::class,"id_visitor");
    }
    public function user(){
        return $this->belongsTo(\App\Models\User::class,"id_user");
    }
}


