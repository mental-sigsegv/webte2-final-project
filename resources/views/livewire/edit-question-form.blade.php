<div class="p-6 bg-gray-800 rounded-lg">
    @if (session()->has('message'))
        <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-lg">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        @csrf

        <div class="mb-4">
            <label for="question" class="text-white block mb-2 text-sm font-medium">{{ __('question.question') }}</label>
            <input type="text" id="question" wire:model="question" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 border-gray-600 ">
            @error('question') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="subject" class="text-white block mb-2 text-sm font-medium">{{ __('question.subject') }}</label>
            <input type="text" id="subject" wire:model="subject_name" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600">
            @error('subject_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" id="active" wire:change="$refresh" wire:model="active" class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-600 ">
            <label for="active" class="text-white ml-2 text-sm font-medium">{{ __('question.active') }}</label>
            @error('active')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        @if(!$active)
            <div class="mb-4">
                <label for="note" class="text-white block mb-2 text-sm font-medium">{{ __('question.note') }}</label>
                <input type="text" id="note" wire:model="note" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600">
                @error('note') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        @endif


        <button type="submit" class="w-full px-4 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-600">{{ __('question.save') }}</button>
    </form>
</div>
