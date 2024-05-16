<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold mb-4">Options</h1>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Option</label>
    <input wire:model="value" wire:change="updateValue" type="text" id="{{ $id }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" placeholder="Option" required="">

    <div class="flex items-center mb-4">
        <input type="checkbox" wire:change="updateValue" id="correct" wire:model="correct" value="1" class="mr-2">
        <label for="correct" class="text-sm font-medium text-gray-900 dark:text-white">Correct</label>
    </div>

    <button type="button" wire:click="remove" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">Remove</button>
</div>
