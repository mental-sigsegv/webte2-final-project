<div class="mx-10 flex items-baseline space-x-4 space-y-4 mb-3">
    <x-nav.nav-link href="/" :active="request()->is('/')">Home</x-nav.nav-link>
    <x-nav.nav-link href="/qrcode" :active="request()->is('qrcode')">QR Code</x-nav.nav-link>
    <x-nav.nav-link href="/question/create" :active="request()->is('question/create')">New Question</x-nav.nav-link>
    <x-nav.nav-link href="/manual" :active="request()->is('/manual')">Manual</x-nav.nav-link>
    <x-nav.nav-link href="/admin" :active="request()->is('/admin')">Admin</x-nav.nav-link>
    <div style="margin-left: auto;">
        <x-nav.nav-link href="/login" :active="request()->is('/login')">Login</x-nav.nav-link>
        <x-nav.nav-link href="/register" :active="request()->is('/register')">Register</x-nav.nav-link>
        <x-nav.nav-link href="/reset_password" :active="request()->is('/reset_password')">Reset Password</x-nav.nav-link>
    </div>
</div>
