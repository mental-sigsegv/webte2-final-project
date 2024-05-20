<?php

namespace App\Livewire;

use App\Models\Option;
use Livewire\Component;

class AnswerOption extends Component
{
    public $options;
    public $selectedOptions = [];

    public function mount($options)
    {
        $this->options = $options;
    }

    public function submitSelected()
    {
        foreach ($this->selectedOptions as $optionId) {
            // Retrieve the option to get the question code
            $option = Option::find($optionId);
            if ($option) {
                \App\Models\Answer::create([
                    'question_code' => $option->question_code,
                    'option_id' => $option->id,
                    // TODO bud dat answer na null alebo nechat dummy text prazdny
                    'answer' => '',
                ]);
            }
        }
        //TODO fix redirect
        return redirect()->route('answers', ['code' => $this->options[0]->question_code]);

    }

    public function render()
    {
        return view('livewire.answer-option');
    }
}
