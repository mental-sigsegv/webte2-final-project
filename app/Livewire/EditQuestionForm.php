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

    public function mount($questionId)
    {
        $question = Question::findOrFail($questionId);

        $this->question = $question->question;
        $this->subject_name = $question->subject->name; // Assuming 'subject' relationship is defined
        $this->active = $question->active;
        $this->questionId = $question->id;
    }

    public function save()
    {
        $validatedData = $this->validate([
            'question' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'active' => 'required|boolean',
        ]);

        $question = Question::findOrFail($this->questionId);
        if($question->answers()->count() == 0) {
            $question->update([
                'question' => $this->question,
                'active' => $this->active,
            ]);

            $question->subject()->update([
                'name' => $this->subject_name,
            ]);
        }

        session()->flash('message', 'Question updated successfully.');
    }

    public function render()
    {
        return view('livewire.edit-question-form', [
            'subjects' => Subject::all(),
        ]);
    }
}

