<div class="max-w-md mx-auto bg-black p-6 rounded-lg shadow-lg text-white">
<form wire:submit="save">
    <div class="max-w-md mx-auto">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" wire:model="subject" id="subject" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-primary-600 peer" placeholder=" " required />
            <label for="subject" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subject</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" wire:model="question" id="question" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-primary-600 peer" placeholder=" " required />
            <label for="question" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Question</label>
        </div>
        <div class="flex flex-col space-y-4">
            <label for="open" class="inline-flex items-center">
                <input type="radio" id="open" wire:change="changeCheckbox" wire:model="question_type" value="1" class="form-radio h-5 w-5 text-indigo-600">
                <span class="ml-2 text-white">Open</span>
            </label>
            <label for="close" class="inline-flex items-center">
                <input type="radio" id="close" wire:change="changeCheckbox" wire:model="question_type" value="0" class="form-radio h-5 w-5 text-indigo-600">
                <span class="ml-2 text-white">Close</span>
            </label>
        </div>


        @if(!$question_type)
            <button type="button" wire:click="addOption" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>

            @foreach($options as $id => $value)
                @livewire('question-option', ['id' => $id, key($id)])
            @endforeach
        @endif

        <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
    </div>

</form>
</div>
