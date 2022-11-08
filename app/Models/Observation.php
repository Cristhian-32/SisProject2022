<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    //Relación de 1 a * inversa
    public function research(){
        return $this->belongsTo(Research::class);
    }

     //Relacion de 1 a 1 inveresa
     public function participant(){
        return $this->hasOne(Participant::class);
    }
}
