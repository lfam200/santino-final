<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{

    protected $table = 'species';

    public function races(){

        return $this->hasMany(Pet::class);
    }

}
