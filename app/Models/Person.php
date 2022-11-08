<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    //Relacion de 1 a *
    public function participants(){
        return $this->hasMany(assistence::class);
    }


}
