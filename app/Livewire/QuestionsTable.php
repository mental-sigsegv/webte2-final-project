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
            Column::make(__('question.question'), "question")
                ->sortable()->searchable(),
            Column::make(__('question.subject'), 'subject.name')
                ->sortable()
                ->searchable(),
            Column::make(__('question.code'), "code")
                ->sortable()->searchable()->hideIf(true), //DONT REMOVE HIDE IF
            Column::make(__('question.code'))
                ->label(
                    fn ($row, Column $column) => view('livewire.qr-code-button')->with(
                        [
                            'code' => $row->code,
                        ]
                    )
                ),
            BooleanColumn::make(__('question.open'), "open"),
            BooleanColumn::make(__('question.active'), "active"),
            Column::make(__('question.created_at'), "created_at")
                ->sortable(),
            Column::make(__('question.updated_at'), "updated_at")
                ->sortable(),
            Column::make(__('question.update_question'))
                ->label(
                    fn ($row, Column $column) => view('livewire.update-question')->with(
                        [
                            'questionId' => $row->id,
                        ])
                ),
            Column::make(__('question.delete'))
                ->label(
                    fn ($row, Column $column) => view('livewire.delete-question')->with(
                    [
                        'questionId' => $row->id,
                    ])
                ),
            Column::make(__('question.show_answers'))
                ->label(
                    fn ($row, Column $column) => view('livewire.show-answers')->with(
                        [
                            'code' => $row->code,
                        ])
                )->html(),
        ];
    }
}
