<?php

namespace App\Http\Traits;

trait HasSearchBox
{
    public static function scopeSearch($query, string $value){ 
        return $query->where('name','like','%'. $value .'%');
    }
}
