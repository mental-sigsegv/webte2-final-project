<?php

namespace App\Livewire;

use Livewire\Component;

class QuestionOption extends Component
{
    public $optionId;

    public function mount($key)
    {
        $this->optionId = $key;
    }

    public function remove()
    {
        $this->dispatch('removeOption', $this->optionId);
    }


    public function render()
    {
        return view('livewire.question-option');
    }
}
