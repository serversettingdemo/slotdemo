<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;

class Slotpgsoft extends Model implements Viewable
{
    use HasFactory, InteractsWithViews;

    protected $fillable = ['title', 'slug', 'image' , 'iframe' , 'body'];
}
