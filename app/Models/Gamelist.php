<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Model;

class Gamelist extends Model implements Viewable
{
    use HasFactory, InteractsWithViews;

    protected $fillable = ['title', 'slug', 'image' , 'iframe' , 'body'];
}
