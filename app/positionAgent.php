<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class positionAgent extends Model
{
    public function Agent(){
        return $this->belongsTo(Agent::class);
    }
}
