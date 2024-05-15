<?php

namespace App\Livewire;

use Livewire\Component;

class QuestionOption extends Component
{
    public $id;

    public $value;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function updateValue(): void
    {
        $this->dispatch('updateOption', ['id' => $this->id, 'value' => $this->value]);
    }

    public function remove(): void
    {
        $this->dispatch('removeOption', $this->id);
    }


    public function render()
    {
        return view('livewire.question-option');
    }
}
