<x-layouts.app title="Question Page">
    <h1>Question Details</h1>

    @if($question)
        <p>Subject: {{ $question->subject()->first()->name}}</p>
        <p>Question: {{ $question->question }}</p>
        @if($question->options()->count() > 0)
            <h2>Options:</h2>
            <ul>
                @foreach($question->options()->get() as $option)
                    <li>{{ $option->option }}</li>
                @endforeach
            </ul>
        @else
            @livewire('answer', ['code' => $question->code])
        @endif
    @endif
</x-layouts.app>
