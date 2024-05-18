<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserDatatable extends DataTableComponent
{
    protected $model = User::class;

    public function builder(): Builder
    {
        return User::query()
            ->where('id', '!=', auth()->id())
            ->select();
    }

    protected $listeners = ['userDeleted' => '$refresh'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function deleteUser($id): void
    {
        DB::table('users')->where('id', '=', $id)->delete();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make(__('user.name'), "name")
                ->sortable()
                ->searchable(),
            Column::make(__('user.login'), "login")
                ->sortable()
                ->searchable(),
            Column::make(__('user.created_at'), "created_at")
                ->sortable(),
            Column::make(__('user.updated_at'), "updated_at")
                ->sortable(),
            Column::make(__('user.action'))
                ->label(
                    fn ($row, Column $column) =>
                        view('components.actions', ['id' => $row->id])
                )->html(),
        ];
    }
}
