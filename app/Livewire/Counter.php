<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public function createUser() : void {
        User::factory()->create();
    }

    public function deleteUsers() : void {
        User::query()->delete();
    }

    public function render()
    {
        return view('livewire.counter')->with([
            "users" => User::all(),
        ]);
    }
}
