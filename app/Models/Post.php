<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function user(){
        return $this->BelongsTo('App\Models\User');
    }
    public function categorie(){
        return $this->BelongsTo('App\Models\Categoria');
    }

    //Relacion uno a muchos polimorficas
    public function comments(){
        return $this->morphMany('App\Models\Commentable', 'commentable');
    }

    public function posts(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
