<x-layouts.app title="{{ __('navbar.answers') }}">
    <h1>{{ __('message.question') }}: {{ $question->question }}</h1>
        <h2>{{ __('navbar.answers') }}:</h2>
        <ul>
            @forelse ($question->answers as $answer)
                <li>{{ $answer->answer }} ({{ $answer->created_at->toFormattedDateString() }})</li>
            @empty
                <p>{{ __('message.no-answers') }}</p>
            @endforelse
        </ul>
</x-layouts.app>
