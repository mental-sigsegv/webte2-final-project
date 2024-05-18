<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Subject;
use LivewireUI\Modal\ModalComponent;

class EditQuestionForm extends ModalComponent
{
    public $question;
    public $subject_name;
    public $active;
    public $questionId;

    protected $casts = [
        'active' => 'boolean',
    ];
    public function mount($questionId)
    {
        $question = Question::findOrFail($questionId);

        $this->question = $question->question;
        $this->subject_name = $question->subject->name;
        $this->active = $question->active == 1;
        $this->questionId = $question->id;
    }

    public function save()
    {
        $this->validate([
            'question' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'active' => 'required|boolean',
        ]);

        $question = Question::findOrFail($this->questionId);
        if($question->answers()->count() == 0) {
            $question->update([
                'question' => $this->question,
                'active' => $this->active ? 1 : 0,
            ]);

            $question->subject()->update([
                'name' => $this->subject_name,
            ]);
        }
        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.edit-question-form', [
            'subjects' => Subject::all(),
        ]);
    }
}

