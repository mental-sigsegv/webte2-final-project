<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Admin extends Component
{
    use WithPagination;

    public function deleteUser($id) {
        DB::table('users')->where('id', '=', $id)->delete();
    }

    public function render()
    {
        return view('livewire.admin')->with([
            'users' => User::where('id', '!=', auth()->id())->simplePaginate(10)
        ]);
    }
}
