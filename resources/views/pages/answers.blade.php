<x-layouts.app>
    <h1>Question: {{ $question->question }}</h1>
    @if ($question->open == 0)
        <h2>Answers:</h2>
        <ul>
            @forelse ($question->answers as $answer)
                @php
                    $option = $answer->option;  // Assuming $answer->option_id links to an Option model
                @endphp
                <li>
                    {{ $option->option }}
                    @if ($option->correct == 1)
                        <strong>(Correct)</strong>
                    @elseif ($option->correct == 0)
                        <strong>(Wrong)</strong>
                    @endif
                    - ({{ $answer->created_at->toFormattedDateString() }})
                </li>

            @empty
                <p>No answers yet.</p>
            @endforelse
        </ul>
    @else
        <h2>Answers:</h2>
        <ul>
            @forelse ($question->answers as $answer)
                <li>{{ $answer->answer }} ({{ $answer->created_at->toFormattedDateString() }})</li>
            @empty
                <p>No answers yet.</p>
            @endforelse
        </ul>
    @endif
</x-layouts.app>
