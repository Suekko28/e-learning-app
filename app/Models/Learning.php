<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{

    protected $fillable = [
        'image', 'title', 'content', 'thumbnail', 'drive'
    ];

    protected $table = 'learnings';

    use HasFactory;
}
