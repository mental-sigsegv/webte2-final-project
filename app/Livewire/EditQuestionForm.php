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
    public $note;
    public $questionId;
    public $questionActive;
    public $activeInterval;

    protected $casts = [
        'active' => 'int',
    ];
    public function mount($questionId)
    {
        $question = Question::findOrFail($questionId);

        $this->question = $question->question;
        $this->subject_name = $question->subject->name;
        $this->active = $question->active == 1;
        $this->questionActive = $this->active;
        $this->questionId = $question->id;
        $this->activeInterval = $question->questionActiveIntervals()
            ->latest()
            ->first();
        $this->note = $this->activeInterval->note;
    }

    public function save()
    {
        $this->validate([
            'question' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'active' => 'required|boolean',
            'note' => 'max:255'
        ]);

        $question = Question::findOrFail($this->questionId);
        if($question->answers()->count() == 0) {
            $question->update([
                'question' => $this->question,
            ]);

            $question->subject()->update([
                'name' => $this->subject_name,
            ]);
        }

        $this->activeInterval->update(['note' => $this->note]);

        if (($this->questionActive != $this->active) && ($this->active == 0)) {
            $this->activeInterval->update(array('active_to' => now()));
        } else if (($this->questionActive != $this->active) && ($this->active == 1)) {
            $question->questionActiveIntervals()->create([
                'active_from' => now(),
                'active_to' => null,
            ]);
        }
        $question->update(['active' => $this->active]);
        $this->activeInterval->update(['note' => $this->note]);

        $this->closeModal();

        $this->dispatch('refreshParent');

//        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.edit-question-form', [
            'subjects' => Subject::all(),
        ]);
    }
}

