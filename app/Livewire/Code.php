<?php

namespace App\Livewire;

use Livewire\Component;

class Code extends Component
{

    public $code;

    public function send()
    {
        if (strlen($this->code) === 5) {
            return redirect()->route('question', ['code' => $this->code]);
        } else {
            session()->flash('error', 'Please enter a 5-letter code.');
        }
    }

    public function render()
    {
        return view('livewire.code');
    }
}
