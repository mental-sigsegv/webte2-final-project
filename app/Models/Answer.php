<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = [
        'answer',
        'question_code'
    ];
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_code', 'code');
    }
}
