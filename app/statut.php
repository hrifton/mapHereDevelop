<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statut extends Model
{
    public function Agent(){
        return $this->hasMany(Agent::class);
    }


}
