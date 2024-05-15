<div class="mx-10 flex items-baseline space-x-4 space-y-4 mb-3">
    <x-nav.nav-link href="/" :active="request()->is('/')">Home</x-nav.nav-link>
    <x-nav.nav-link href="/qrcode" :active="request()->is('qrcode')">QR Code</x-nav.nav-link>

    <x-nav.nav-link href="/manual" :active="request()->is('manual')">Manual</x-nav.nav-link>



    @auth
        <x-nav.nav-link href="/questions" :active="request()->is('questions')">Questions</x-nav.nav-link>
        <x-nav.nav-link href="/question/create" :active="request()->is('question/create')">New Question</x-nav.nav-link>
        @if(auth()->user()->role === 'Admin')
            <x-nav.nav-link href="/admin" :active="request()->is('admin')">Admin</x-nav.nav-link>
        @endif
    @endauth

    <div style="margin-left: auto;">
        @if(!auth()->check())
            <x-nav.nav-link href="/login" :active="request()->is('login')">Login</x-nav.nav-link>
            <x-nav.nav-link href="/register" :active="request()->is('register')">Register</x-nav.nav-link>
        @endif

        @auth
            <x-nav.nav-link href="/logout" :active="request()->is('logout')">Logout</x-nav.nav-link>
            <x-nav.nav-link href="/reset_password" :active="request()->is('reset_password')">Reset Password</x-nav.nav-link>
        @endauth
    </div>
</div>
