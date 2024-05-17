<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = [
        'answer',
        'question_code',
        'option_id'
    ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'id', 'option_id');
    }
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_code', 'code');
    }
}
