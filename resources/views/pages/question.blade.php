<x-layouts.app title="Question Page">
    <h1>Question Details</h1>

    @if($question)
        <p>Subject: {{ $question->subject()->first()->name}}</p>
        <p>Question: {{ $question->question }}</p>
        @if($question->options()->count() > 0)
            @livewire('answer-option', ['options' =>$question->options()->get()] )
        @else
            @livewire('answer', ['code' => $question->code])
        @endif
    @endif
</x-layouts.app>
