<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'code',
        'user_id',
        'subject_id',
        'open',
        'active',
    ];

    protected $casts = [
        'open' => 'integer',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    // Relationship method to define the "answers" relationship
    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_code', 'code');
    }

    public function isOpen()
    {
        return $this->open == 1;
    }

    public function options(): HasMany
    {
        return $this->hasMany(Option::class, 'question_code', 'code');
    }

    public function questionActiveIntervals(): HasMany
    {
        return $this->hasMany(QuestionActiveInterval::class, 'question_code', 'code');
    }


    // Method to find a question by its code
    public static function findByCode($code): Model|Builder|Question
    {
        return self::where('code', $code)->firstOrFail();
    }

}
