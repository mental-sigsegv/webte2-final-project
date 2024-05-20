<section>
    <div class="flex flex-col items-center justify-center py-8 mx-auto sx:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    {{ __('navbar.change-credentials') }}
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('updateCredentials') }}" method="POST">
                    @csrf
                    <div>
                        <label for="new_name" class="@error('name') is-invalid @enderror block mb-2 text-sm font-medium text-gray-900">
                            {{ __('auth.name') }}
                        </label>
                        <input type="text" name="new_name" id="new_name" value="{{ \App\Models\User::find($id)->name }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        @error('new_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="new_login" class="@error('login') is-invalid @enderror block mb-2 text-sm font-medium text-gray-900">
                            {{ __('auth.login') }}
                        </label>
                        <input type="text" name="new_login" id="new_login" value="{{ \App\Models\User::find($id)->login }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        @error('new_login')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="new_role" class="@error('role') is-invalid @enderror block mb-2 text-sm font-medium text-gray-900">
                            {{ __('auth.role') }}
                        </label>
                        <select id="new_role" name="new_role" wire:model="selectedRole" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                            @foreach(\App\Enums\Roles::cases() as $role)
                                <option value="{{ $role->value }}" {{ $role->value == \App\Models\User::find($id)->role ? 'selected' : '' }}>
                                    {{ $role->value }}
                                </option>
                            @endforeach
                        </select>
                        @error('new_role')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="user_id" value="{{ $id }}">
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        {{ __('navbar.change-credentials') }}
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>
