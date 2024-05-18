<x-layouts.app title="{{ __('navbar.questions') }}">
    <div class="overflow-x-auto">
        <button onclick="window.location.href='{{ route('questions.export') }}'" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Export All Questions
        </button>
        @livewire('wire-elements-modal')
        @livewire('QuestionsTable')
    </div>
</x-layouts.app>
