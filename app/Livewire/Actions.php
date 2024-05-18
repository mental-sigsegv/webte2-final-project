<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Actions extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function deleteUser(): void
    {
        DB::table('users')->where('id', '=', $this->id)->delete();

        $this->dispatch('userDeleted');
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
