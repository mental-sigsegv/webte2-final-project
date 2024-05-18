<div class="flex items-center justify-center min-h-80">
    <div class="w-full max-w-lg mx-auto bg-gray-800 p-10 rounded-lg shadow-lg text-white">
        <form wire:submit="send">
            <div class="max-w-lg mx-auto">
                <div class="relative z-0 w-full mb-5 group">
                    <input wire:model="code" type="text"
                           class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-primary-600 peer"
                           pattern="[A-Za-z0-9]{5}" title="Please enter a 5-letter code" maxlength="5"
                           placeholder=" ">
                    <label for="code"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('code.enter-code') }}</label>
                </div>
                <button type="submit"
                        class="mt-5 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('code.search-bar') }}</button>
            </div>
        </form>
    </div>
</div>
