<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionActiveInterval extends Model
{
    protected $fillable = [
        'question_code',
        'active_from',
        'active_to',
        'note'
    ];
}
