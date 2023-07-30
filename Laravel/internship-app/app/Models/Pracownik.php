<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pracownik extends Model
{
    use HasFactory;
    function getKlient(){
        return $this->hasMany('App\Models\Klient');
    }
}
