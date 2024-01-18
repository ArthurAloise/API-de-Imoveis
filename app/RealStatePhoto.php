<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealStatePhoto extends Model
{

    protected $fillable = [
        'photo',
        'is_thumb'
    ];
    public function real_state(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RealState::class);
    }
}
