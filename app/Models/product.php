<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    // renomination de la table product
    protected $table = "products";

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

    public function productCategorie(){
        return $this->belongsTo(\App\Models\product_categorie::class,"id_categorie");
    }

    public function productCaracteristique(){
        return $this->belongsTo(\App\Models\product_caracteristique::class,"id_caracteristique");
    }
    public function image(){
        return $this->BelongsTo(\App\image::class,"image");
    }

    public function achat(){
        return $this->hasMany(\App\Models\achat::class,"id_product");
    }
    public function notification(){
        return $this->hasOne(\App\Models\notification::class,"id_entityProduct");
    }

}
