<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_categorie extends Model
{
    use HasFactory;
    protected $table = 'user_categorie';
    protected $fillable = ['categorie_label'];
    protected $guard = ['id'];

    public function user(){
        return $this->hasOne(\App\Models\User::class,"user_categorie");
    }
}
