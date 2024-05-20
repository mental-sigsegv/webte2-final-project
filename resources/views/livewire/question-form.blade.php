<div class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow-lg text-white">
<form wire:submit="save">
    <div class="max-w-md mx-auto">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" wire:model="subject" id="subject" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-600 peer" placeholder=" " required />
            <label for="subject" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('message.subject') }}</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" wire:model="question" id="question" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-600 peer" placeholder=" " required />
            <label for="question" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('message.question') }}</label>
        </div>
        @auth
            @if(auth()->user()->isAdmin())
                <div class="mb-3">
                    <select id="user" wire:model="selectedUser" class="p-1 block w-full mt-1 bg-white text-gray-800 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value=""> {{ __('question.select_user') }}</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

            @endif
        @endauth
        <div class="flex flex-col space-y-4">
            <p>
                {{ __('message.question-type') }}
            </p>
            <label for="open" class="inline-flex items-center">
                <input type="radio" id="open" wire:change="changeCheckbox" wire:model="question_type" value="1" class="form-radio h-5 w-5 text-indigo-600">
                <span class="ml-2 text-white">{{ __('message.question-type-open') }}</span>
            </label>
            <label for="close" class="inline-flex items-center">
                <input type="radio" id="close" wire:change="changeCheckbox" wire:model="question_type" value="0" class="form-radio h-5 w-5 text-indigo-600">
                <span class="ml-2 text-white">{{ __('message.question-type-close') }}</span>
            </label>
        </div>


        @if(!$question_type)
            <div class="mt-4 flex justify-between items-center">
                <p class="text-lg">
                    {{ __('message.options') }}
                </p>
                <button type="button" wire:click="addOption"
                        class="ml-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>
                </button>
            </div>

            @foreach($options as $id => $value)
                @livewire('question-option', ['id' => $id, key($id)])
            @endforeach
        @endif

        <button type="submit" class="mt-4 w-full px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">{{ __('message.save') }}</button>    </div>

</form>
</div>
