<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_caracteristique extends Model
{
    use HasFactory;

    // renomination de la table product
    protected $table = "product";

    // fixer le primary key de la table
    protected $primaryKey = "id";

    // incrementation id
    public $incrementing = true;

    // type de l'auto incrementing id
    protected $keyType = 'int';

    // ajouter un timestamp ou non
    public $timestamp = false;

    protected $fillable = ['size'];

    public function product(){
        $this->hasOne(\App\product::class,"id_caracteristique");
    }
}
