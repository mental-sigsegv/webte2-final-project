<section>
    <div class="flex flex-col items-center justify-center py-8 mx-auto sx:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    {{ __('navbar.reset-password') }}
                </h1>
                <form class="space-y-4 md:space-y-6" action="/reset_password" method="POST">
                    @csrf
                    <p>
                        {{ __('user.description') }} {{ $id }}
                    </p>
                    <input name='id' id="id" value="{{ $id }}" type="text" hidden>
                    <div>
                        <label for="new_password"
                               class="@error('password') is-invalid @enderror block mb-2 text-sm font-medium text-gray-900">{{ __('auth.password') }}</label>
                        <input type="password" name="new_password" id="new_password" placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                               required="">

                        @error('new_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="new_password_confirmation"
                               class="@error('password') is-invalid @enderror block mb-2 text-sm font-medium text-gray-900">{{ __('auth.confirm-password') }}</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                               placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                               required="">

                        @error('new_password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full text-white bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ __('navbar.reset-password') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
