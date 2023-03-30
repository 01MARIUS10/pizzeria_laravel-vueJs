<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    // renomination de la table product
    protected $table = "product";

    // fixer le primary key de la table
    protected $primaryKey = "id";

    // incrementation id
    public $incrementing = true;

    // type de l'auto incrementing id
    protected $keyType = 'string';

    // ajouter un timestamp ou non
    public $timestamp = false;

    // formater notre timestamp
    protected $dateFormat = 'U';

    // customize le nom du colonne
    const CREATED_AT = 'creation_date';
    const UPDATE_AT = 'last_update';

    //les valeurs par defaut des attributs
    // protected $attributes = [
    //     'name'=>"pizza"
    // ];

    // les attribut modifiable
    protected $fillable = ['name','id_categorie','id_caracteristique','price','image'];

    // les attribut qui ne sont pas modifiable
    protected $guarded = ['id'];

}