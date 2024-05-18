<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Subject;
use LivewireUI\Modal\ModalComponent;

class EditQuestionForm extends ModalComponent
{
    public $question;
    public $subject;
    public $active;
    public $questionId;

    public function mount($questionId)
    {
        $question = Question::findOrFail($questionId);

        $this->question = $question->question;
        $this->subject = $question->subject_id;
        $this->active = $question->active;
        $this->questionId = $question->id;
    }

    public function save()
    {
        $validatedData = $this->validate([
            'question' => 'required|string|max:255',
            'subject' => 'required|exists:subjects,id',
            'active' => 'required|boolean',
        ]);

        $question = Question::findOrFail($this->questionId);
        $question->update([
            'question' => $this->question,
            'subject_id' => $this->subject,
            'active' => $this->active,
        ]);

        session()->flash('message', 'Question updated successfully.');
    }

    public function render()
    {
        return view('livewire.edit-question-form', [
            'subjects' => Subject::all(),
        ]);
    }
}

