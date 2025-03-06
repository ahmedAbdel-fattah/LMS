<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItem extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carousel_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'title_en',
        'subtitle', 'subtitle_en',
        'description', 'description_en',
        'image',
        'button1_text', 'button1_text_en', 'button1_link',
        'button2_text', 'button2_text_en', 'button2_link',
    ];
}