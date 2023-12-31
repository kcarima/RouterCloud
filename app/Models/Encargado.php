<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->belongsTo(Cliente::class,'CLIENTE_ID');
    }
}