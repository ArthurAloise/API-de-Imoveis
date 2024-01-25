<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function state(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function real_state()
    {
        return $this->hasOne(RealState::class);
    }
}
