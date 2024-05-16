<div>
    <h1>Options</h1>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Option</label>
    <input wire:model="value" wire:change="updateValue" type="text" id="{{ $id }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Question" required="">

    <label for="correct">Correct</label><br>
    <input type="checkbox" wire:change="updateValue" id="correct" wire:model="correct" value="1">

    <button type="button" wire:click="remove">Remove</button>
</div>
