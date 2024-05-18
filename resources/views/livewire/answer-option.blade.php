<div>
    <h2 class="text-2xl font-bold mb-3">Options:</h2>
    <form wire:submit.prevent="submitSelected" class="space-y-4">
        <ul class="space-y-2">
            @foreach($options as $option)
                <li class="flex items-center">
                    <input
                        type="checkbox"
                        wire:model="selectedOptions"
                        value="{{ $option->id }}"
                        class="form-checkbox h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                    >
                    <span class="ml-2 text-gray-700">{{ $option->option }}</span>
                </li>
            @endforeach
        </ul>
        <button
            type="submit"
            class="w-full px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500"
        >
            Submit Selected Options
        </button>
    </form>
</div>
