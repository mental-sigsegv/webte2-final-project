<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public $id;

    public function mount($id) {
        $this->id = $id;
    }

    public static function modalMaxWidth(): string
    {
        return 'sm';
    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
