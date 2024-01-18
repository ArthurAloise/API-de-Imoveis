<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    protected $table = 'real_state';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'content',
        'price',
        'slug',
        'bedrooms',
        'bathrooms',
        'property_area',
        'total_property_area'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'real_state_categories');
    }

    public function photos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RealStatePhoto::class);
    }
}
