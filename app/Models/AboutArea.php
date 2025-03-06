<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'icon_1',
        'icon_2',
        'icon_3',
        'btn_text',
        'btn_link',
        'image_1',
        'image_2'
    ];
}