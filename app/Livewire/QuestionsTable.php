<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Question;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class QuestionsTable extends DataTableComponent
{
    protected $model = Question::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->hideIf(true),
            Column::make("Question", "question")
                ->sortable()->searchable(),
            Column::make('Subject', 'subject.name')
                ->sortable()
                ->searchable(),
            Column::make("Code", "code")
                ->sortable()->searchable()->hideIf(true), //DONT REMOVE HIDE IF
            Column::make('Code')
                ->label(
                    fn ($row, Column $column) => view('livewire.qr-code-button')->with(
                        [
                            'code' => $row->code,
                        ]
                    )
                ),
            BooleanColumn::make('Open'),
            BooleanColumn::make('Active'),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Update question')
                ->label(
                    fn ($row, Column $column) => view('livewire.update-question')->with(
                        [
                            'questionId' => $row->id,
                        ])
                ),
            Column::make('Delete')
                ->label(
                    fn ($row, Column $column) => view('livewire.delete-question')->with(
                    [
                        'questionId' => $row->id,
                    ])
                ),
            Column::make('Show answers')
                ->label(
                    fn ($row, Column $column) => view('livewire.show-answers')->with(
                        [
                            'code' => $row->code,
                        ])
                )->html(),
        ];
    }
}
