<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    //Relacion de 1 a 1 inveresa
    public function research(){
        return $this->hasOne(Research::class);
    }
}
