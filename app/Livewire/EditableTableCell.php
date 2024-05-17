<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class EditableTableCell extends Component
{
    public $value;
    public $model;
    public $attribute;
    public $code;
    public $editing = false;

    public function mount($value, $model, $attribute, $code)
    {
        $this->value = $value;
        $this->model = $model;
        $this->attribute = $attribute;
        $this->code = $code;
    }

    public function toggleEdit()
    {
        $this->editing = !$this->editing;
    }

    public function save()
    {
        $question = Question::findByCode($this->code);

        if($question->answers()->count() == 0) {
            $this->model->{$this->attribute} = $this->value;
            $this->model->save();
        } else{
            //TODO pridate alert abo daco ze sa neda leba otazka ma odpovede
        }
        $this->editing = false;
    }

    public function render()
    {
        return view('livewire.editable-table-cell');
    }
}
