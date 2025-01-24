<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_carousel',
        'description_carousel',
        'image_carousel',
        'link_carousel',
    ];
}
