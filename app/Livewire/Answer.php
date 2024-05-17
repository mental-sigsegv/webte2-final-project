<?php

namespace App\Livewire;

use App\Models\Answer as AnswerModel;
use App\Models\Question;
use Livewire\Component;

class Answer extends Component
{
    public $answer;
    public $code;

    protected $rules = [
        'answer' => 'required|string|max:255',
    ];

    public function mount($code): void
    {
        $this->code = $code;
    }

    public function submitAnswer()
    {
        $this->validate();

        AnswerModel::create([
            'answer' => $this->answer,
            'question_code' => $this->code,
        ]);

        return redirect()->route('answers', ['code' => $this->code]);
    }

    public function render()
    {
        return view('livewire.answer', [
            'question' => Question::findByCode($this->code),
        ]);
    }
}
