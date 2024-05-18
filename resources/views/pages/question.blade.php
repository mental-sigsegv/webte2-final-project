<x-layouts.app title="{{ __('navbar.question') }}">
    <div class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow-lg text-white">
        <h1 class="text-3xl font-bold mb-4">{{ __('message.question-details') }}</h1>

        @if($question)
            <div class="bg-white text-lg text-gray-800 rounded-lg shadow-md p-6 mb-8">
                <p>{{ __('message.subject') }}: <span class="font-bold">{{ $question->subject()->first()->name }}</span>
                </p>
                <p class="mb-3">{{ __('message.question') }}: <span class="font-bold">{{ $question->question }}</span>
                </p>
                @if($question->options()->count() > 0)
                    @livewire('answer-option', ['options' =>$question->options()->get()] )
                @else
                    @livewire('answer', ['code' => $question->code])
                @endif
            </div>
    @endif
</x-layouts.app>


