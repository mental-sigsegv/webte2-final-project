<div class="max-w-md mx-auto bg-white rounded-lg shadow-lg">
    <form wire:submit.prevent="submitAnswer" class="space-y-4">
        <input
            wire:model="answer"
            type="text"
            maxlength="255"
            placeholder="{{ __('question.enter_answer') }}"
            class="text-black w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 focus:border-gray-800"
        >
        <button
            type="submit"
            class="w-full px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500"
        >
            {{ __('question.save') }}
        </button>
    </form>
</div>


