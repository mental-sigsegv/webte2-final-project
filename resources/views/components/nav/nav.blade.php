<div class="mx-10 flex items-baseline space-x-4 space-y-4 mb-3">
    <x-nav.nav-link href="/" :active="request()->is('/')">{{ __('navbar.home') }}</x-nav.nav-link>
    <x-nav.nav-link href="/qrcode" :active="request()->is('qrcode')">QR Code</x-nav.nav-link>

    <x-nav.nav-link href="/manual" :active="request()->is('manual')">{{ __('navbar.manual') }}</x-nav.nav-link>



    @auth
        <x-nav.nav-link href="/questions" :active="request()->is('questions')">{{ __('navbar.questions') }}</x-nav.nav-link>
        <x-nav.nav-link href="/question/create" :active="request()->is('question/create')">{{ __('navbar.new-question') }}</x-nav.nav-link>
        @if(auth()->user()->role === 'Admin')
            <x-nav.nav-link href="/admin" :active="request()->is('admin')">Admin</x-nav.nav-link>
        @endif
    @endauth

    <div style="margin-left: auto;">
        @if(!auth()->check())
            <x-nav.nav-link href="/login" :active="request()->is('login')">{{ __('navbar.login') }}</x-nav.nav-link>
            <x-nav.nav-link href="/register" :active="request()->is('register')">{{ __('navbar.register') }}</x-nav.nav-link>
        @endif

        @auth
            <x-nav.nav-link href="/logout" :active="request()->is('logout')">{{ __('navbar.logout') }}</x-nav.nav-link>
            <x-nav.nav-link href="/reset_password" :active="request()->is('reset_password')">{{ __('navbar.reset-password') }}</x-nav.nav-link>
        @endauth
    </div>

    <div>
        @include('components.nav.language-switcher')
    </div>
</div>
