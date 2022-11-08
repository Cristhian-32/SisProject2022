<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    //Relación de 1 a * inversa
    public function research(){
        return $this->belongsTo(Research::class);
    }
}
