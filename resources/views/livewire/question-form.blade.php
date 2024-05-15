<div>
    <form wire:submit="save">
        @csrf
        <div>
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
            <input type="text" wire:model="subject" id="subject"
                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="webte2" required="">
        </div>
        <div>
            <label for="question" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question</label>
            <input type="text" wire:model="question" id="question"
                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Question" required="">
        </div>
        <div>
            <input type="radio" id="open" wire:model="question_type" value=1>
            <label for="open">Open</label><br>
            <input type="radio" id="close" wire:model="question_type" value=0>
            <label for="close">Close</label><br>
        </div>

        <button type="button" wire:click="addOption">Add</button>

        @foreach($options as $id => $value)
            @livewire('question-option', ['id' => $id, key($id)])
        @endforeach

        <button type="submit">Save</button>
    </form>
</div>
