<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'learning_id',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'option_true',
    ];

    protected $table = 'quiz';

    public function learning(): BelongsTo {
        return $this->belongsTo(Learning::class, 'learning_id', 'id');
    }

}
