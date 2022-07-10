<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homedesc extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'desc', 'desc_pgsoft'];
}
