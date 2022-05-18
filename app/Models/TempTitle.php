<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'short_description',
        'description',
        'link',
        'featured_image_link'
    ];
}
