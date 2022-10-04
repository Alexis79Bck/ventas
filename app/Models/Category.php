<?php

namespace App\Models;

use App\Http\Traits\HasSearchBox;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasSearchBox;

    protected $fillable = [
        'name',
        'image'
    ];


}
