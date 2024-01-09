<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizScore extends Model
{
    use HasFactory;

    protected $table = 'quiz_scores';
    protected $fillable = [
        'learning_id',
        'user_id',
        'true_answer',
        'score'
    ];

    public function learning(): BelongsTo {
        return $this->belongsTo(Learning::class, 'learning_id', 'id');
    }
  
}
