<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    //Relación de 1 a * inversa
    public function person(){
        return $this->belongsTo(person::class);
    }

    //Relacion de 1 a 1
    public function observation(){
        return $this->hasOne(Observation::class);
    }

    public function research(){
        return $this->hasOne(Research::class);
    }

}
