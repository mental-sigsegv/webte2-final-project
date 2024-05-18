<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class EditableSelectTableCell extends Component
{
    public $code;
    public $active;
    public $options;

    public function mount($active, $options, $code)
    {
        $this->active = $active;
        $this->options = $options;
        $this->code = $code;
    }

    public function save()
    {
        $question = Question::findByCode($this->code);
        $question->active = $this->active;
        $question->save();
    }

    public function render()
    {
        return view('livewire.editable-select-table-cell');
    }
}
