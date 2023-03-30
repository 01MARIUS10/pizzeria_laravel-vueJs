<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_categorie extends Model
{
    use HasFactory;

    // renomination de la table product
    protected $table = "product_categorie";

    // fixer le primary key de la table
    protected $primaryKey = "id";

    // incrementation id
    public $incrementing = true;

    // type de l'auto incrementing id
    protected $keyType = 'string';

    // ajouter un timestamp ou non
    public $timestamp = false;


    //les valeurs par defaut des attributs
    protected $attributes = [
        'categorie_label'=>"pizza"
    ];

    protected $fillable = ['categorie_label'];


}
