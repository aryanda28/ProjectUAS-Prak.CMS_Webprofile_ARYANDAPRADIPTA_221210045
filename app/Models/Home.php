<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'title1',
        'title2',
        'title3',
        'button_left',
        'button_right',
        'about_me_title',
        'about_me_description',
        'image_path'
    ];
}
