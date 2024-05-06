<div>
    <div
        class="relative sm:flex sm:justify-center sm:items-center flex-col min-h-screen selection:text-white">
        <div class="my-6">
            <button
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                wire:click="createUser">
                Create User
            </button>

            <button
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                wire:click="deleteUsers">
                Delete Users
            </button>


            @foreach ($users as $user)
                <p wire:key="{{ $user->id }}" class="ml-2 text-gray-800 bg-zinc-300 py-2 px-4 my-1 w-full rounded">{{ $user->name }}</p>
            @endforeach
        </div>
    </div>
</div>
