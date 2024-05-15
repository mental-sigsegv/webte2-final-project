<?php

namespace App\Livewire;

use App\Models\Option;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Validate;
use Livewire\Component;

class QuestionForm extends Component
{
    #[Validate('required')]
    public $subject = '';

    #[Validate('required')]
    public $question = '';
    #[Validate('required')]
    public $question_type = '';

    #[Validate('required')]
    public $options = [];

    #[NoReturn] public function save(): void
    {


        $subject = Subject::create([
            'name' => $this->subject,
        ]);

        $question = Question::create([
            'code' => fake()->unique()->regexify('[A-Za-z0-9]{5}'),
            'user_id' => auth()->id(),
            'subject_id' => $subject->id,
            'question' => $this->question,
            'open' => $this->question_type,
        ]);
        foreach ($this->options as $key => $value) {
            Option::create([
                'question_id' => $question->id,
                'option' => $value,
                'correct' => false, // Assuming you have a correct field to indicate the correct answer
            ]);
        }


        redirect('/');
    }

    public function addOption() : void {
        $this->options[] = ['id' => uniqid(), 'value' => ''];
    }

    protected $listeners = [
        'updateOption' => 'updateOptionValue',
        'removeOption' => 'removeOptionById'
    ];

    public function updateOptionValue($data): void
    {
        $this->options[$data['id']] = $data['value'];
    }

    // TODO FIX
    public function removeOptionById($id): void
    {
        $this->options = array_filter($this->options, function($option) use ($id) {
            return $option !== $id;
        });
    }


    public function render()
    {
        return view('livewire.question-form');
    }
}
