<x-layouts.app>
    <h1>Question: {{ $question->question }}</h1>
        <h2>Answers:</h2>
        <ul>
            @forelse ($question->answers as $answer)
                <li>{{ $answer->answer }} ({{ $answer->created_at->toFormattedDateString() }})</li>
            @empty
                <p>No answers yet.</p>
            @endforelse
        </ul>
</x-layouts.app>
