<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    use HasFactory;

    protected $table = 'user_quiz';
    protected $fillable = [
        'learning_id',
        'quiz_id',
        'user_id',
        'answer',
        'status',
    ];

}