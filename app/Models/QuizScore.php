<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizScore extends Model
{
    use HasFactory;

    protected $table = 'quiz_scores';

    public function learning(): BelongsTo {
        return $this->belongsTo(Learning::class, 'learning_id', 'id');
    }
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
