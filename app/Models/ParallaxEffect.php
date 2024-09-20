<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParallaxEffect extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'heading','sub_heading'];
}
