<x-layouts.app title="{{ __('navbar.question') }}">
    <h1>{{ __('message.question-details') }}</h1>

    @if($question)
        <p>{{ __('message.subject') }}: {{ $question->subject()->first()->name}}</p>
        <p>{{ __('message.question') }}: {{ $question->question }}</p>
        @if($question->options()->count() > 0)
            @livewire('answer-option', ['options' =>$question->options()->get()] )
        @else
            @livewire('answer', ['code' => $question->code])
        @endif
    @endif
</x-layouts.app>
