<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification_categorie extends Model
{
    use HasFactory;
    protected $filliale = ['notification_label'];

    public function notification(){
        return $this->hasMany(\App\Models\notification::class,"id_categorie");
    }

}
