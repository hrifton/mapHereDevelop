<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    public function positionagent()
    {
        return $this->hasMany(PositionAgent::class);
    }

    public function statut()
    {
        return $this->belongTo(Statut::class);
    }

}
