<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;
use function Sodium\add;

class QuestionOptions extends Component
{
    public $options = [];

    public function addOption() : void {
        $this->options[] = uniqid();
    }

    protected $listeners = [
        'removeOption' => 'removeOptionById'
    ];

    public function removeOptionById($id): void
    {
        $this->options = array_filter($this->options, function($option) use ($id) {
            return $option !== $id;
        });
    }

    public function render()
    {
        return view('livewire.question-options');
    }
}
