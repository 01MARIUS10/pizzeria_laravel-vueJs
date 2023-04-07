<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;
    protected $filliale = [
        "id_categorie",
        "id_entityAchat",
        "id_entityChat",
        "id_entityProduct",
    ];

    public function notificationCategorie(){
        return $this->belongsTo(\App\Models\notification_categorie::class,"id_categorie");
    }
    public function chat(){
        return $this->belongsTo(\App\Models\chat::class,"id_entityChat");
    }
    public function achat(){
        return $this->belongsTo(\App\Models\achat::class,"id_entityAchat");
    }
    public function product(){
        return $this->belongsTo(\App\Models\product::class,"id_entityProduct");
    }
}
