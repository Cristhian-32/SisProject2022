<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    //Relacion de 1 a *
    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function observations(){
        return $this->hasMany(Observation::class);
    }

    public function stages(){
        return $this->hasMany(Stage::class);
    }

    //Relacion de 1 * 1
    public function area(){
        return $this->hasOne(Area::class);
    }

    public function result(){
        return $this->hasOne(Result::class);
    }

    public function participant(){
        return $this->hasOne(Participant::class);
    }
}
