<x-layouts.app title="{{ __('navbar.login') }}">
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8">
            <div class="w-full bg-gray-800 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        {{ __('auth.login') }}
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/login" method="POST" novalidate>
                        @csrf
                        <div>
                            <label for="login" class="block mb-2 text-sm font-medium text-white">{{ __('auth.login') }}</label>
                            <input type="text" name="login" id="login" class="bg-gray-50 border border-gray-300 text-white0 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="{{ __('auth.login') }}" required="">
                        </div>
                        <div>
                            <label for="password" class="@error('password') is-invalid @enderror block mb-2 text-sm font-medium text-white ">{{ __('auth.password') }}</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-800 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">

                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="w-full text-gray-800 bg-white hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ __('auth.login-here') }}</button>
                        <p class="text-sm font-light text-gray-500">
                            {{ __('auth.dont-have-acc') }} <a href="/register" class="font-medium text-primary-600 hover:underline">{{ __('auth.create-acc') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
