<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'short_description',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
    public function getShortDescriptionAttribute($value)
    {
        return $this->attributes['short_description'] = strip_tags($value);
    }
    public function getDescriptionAttribute($value)
    {
        return $this->attributes['description'] = strip_tags($value);
    }
    public function getNameAttribute($value)
    {
        return $this->attributes['name'] = strip_tags($value);
    }
    public function getSlugAttribute($value)
    {
        return $this->attributes['slug'] = strip_tags($value);
    }
    public function getImageAttribute($value)
    {
        return $this->attributes['image'] = strip_tags($value);
    }
}
