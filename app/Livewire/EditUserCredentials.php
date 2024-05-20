<?php

namespace App\Livewire;

use App\Enums\Roles;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class EditUserCredentials extends ModalComponent
{
    public $id;
    public $roles;
    public $selectedRole;

    public function mount($id) {
        $this->id = $id;
        $this->roles = array_column(Roles::cases(), 'name');
        $this->selectedRole = User::find($id)->role;

    }

    public static function modalMaxWidth(): string
    {
        return 'sm';
    }

    public function render()
    {
        return view('livewire.edit-user-credentials');
    }
}
