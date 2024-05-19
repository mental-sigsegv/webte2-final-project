<x-layouts.app title="{{ __('navbar.manual') }}">
    <style>
        @font-face {
            font-family: 'DejaVu Sans';
            src: url('{{ public_path('fonts/DejaVuSans.ttf') }}') format('truetype');
        }
        .container {
            font-family: 'DejaVu Sans', sans-serif;
        }
    </style>
    <div class="container mx-auto p-6">
        <button onclick="window.location.href='{{ route('manual.download') }}'"
                class="download-button bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
            {{ __('manual.download_pdf') }}
        </button>

        <div class="mt-8 space-y-6 text-white">
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.login') }}</h2>
                <p>{{ __('manual.login_description') }}</p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.change_password') }}</h2>
                <p>{{ __('manual.change_password_description') }}</p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.questions') }}</h2>
                <ul class="list-disc list-inside pl-6">
                    @foreach(__('manual.questions_description') as $desc)
                        <li>{{ $desc }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.question_types') }}</h2>
                <ul class="list-disc list-inside pl-6">
                    @foreach(__('manual.question_types_description') as $desc)
                        <li>{{ $desc }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.results_display') }}</h2>
                <p>{{ __('manual.results_display_description') }}</p>
                <ul class="list-disc list-inside pl-6">
                    @foreach(__('manual.results_display_methods') as $desc)
                        <li>{{ $desc }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.question_editing') }}</h2>
                <p>{{ __('manual.question_editing_description') }}</p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.question_filtering') }}</h2>
                <p>{{ __('manual.question_filtering_description') }}</p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.export_questions') }}</h2>
                <p><li>{{ __('manual.export_questions_description') }}</li></p>
                <p>
                    @foreach(__('manual.admin_description') as $desc)
                        <li>{{ $desc }}<br></li>
                    @endforeach
                </p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.getting_poll') }}</h2>
                <p>{{ __('manual.getting_poll_description') }}</p>
                <ul class="list-disc list-inside pl-6">
                    @foreach(__('manual.getting_poll_methods') as $desc)
                        <li>{{ $desc }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">{{ __('manual.completing_poll') }}</h2>
                <p>{{ __('manual.completing_poll_description') }}</p>
            </div>
        </div>
    </div>
</x-layouts.app>
