<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Learning extends Model
{

    protected $fillable = [
        'image', 'title', 'content', 'thumbnail', 'drive'
    ];

    protected $table = 'learnings';

    use HasFactory;

    public function quiz(): HasMany {
        return $this->hasMany(Quiz::class, 'learning_id', 'id');
    }

    public function participant(): HasMany {
        return $this->hasMany(QuizScore::class, 'learning_id', 'id');
    }

    public function userQuiz() : HasMany
    {
        return $this->hasMany(UserQuiz::class, 'quiz_id', 'id');
    }
}
