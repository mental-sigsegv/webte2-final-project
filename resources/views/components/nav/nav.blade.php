<div class="ml-10 flex items-baseline space-x-4 space-y-4 mb-3">
    <x-nav.nav-link href="/" :active="request()->is('/')">Home</x-nav.nav-link>
    <x-nav.nav-link href="/qrcode" :active="request()->is('qrcode')">QR Code</x-nav.nav-link>
    <x-nav.nav-link href="/question/create" :active="request()->is('question/create')">New Question</x-nav.nav-link>
</div>
