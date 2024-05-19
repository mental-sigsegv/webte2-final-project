<x-layouts.app title="{{ __('navbar.answers') }}">
    @foreach($question_intervals_data as $data)
{{--        {{dd($question_intervals_data)}}--}}
        <div class="max-w-3xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg text-white mt-10">
            <h1 class="text-4xl font-bold mb-6">{{ __('message.question') }}: {{ $data['question']->question }}</h1>

            @if ($data['question']->open == 0)
                <h2 class="text-2xl font-semibold mb-4">{{ __('navbar.answers') }}:</h2>

                <p>
                    FROM: {{ $data['a_from'] }}
                </p>

                <p>
                   TO: {{ $data['a_to'] }}
                </p>


                <div class="flex justify-center items-center h-80 w-full">
                    <canvas id="answerChart-{{$data['a_from']}}"></canvas>
                </div>
                <script>
                    var ctx = document.getElementById('answerChart-{!! $data['a_from'] !!}').getContext('2d');
                    var answerChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: @json($data['labels']),
                            datasets: [{
                                data: @json($data['data']),
                                backgroundColor: @json($data['backgroundColors']),
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                    labels: {
                                        color: 'white',
                                        font: {
                                            size: 16
                                        }
                                    }
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function (tooltipItem) {
                                            return tooltipItem.label + ': ' + tooltipItem.raw;
                                        }
                                    }
                                }
                            }
                        }
                    });
                </script>
            @else
                <h2 class="text-2xl font-semibold mb-4">{{ __('navbar.answers') }}:</h2>
                <ul class="space-y-4">
                    @forelse ($question->answers as $answer)
                        <li class="bg-gray-700 p-4 rounded-md">
                            <p>{{ $answer->answer }}</p>
                            <span
                                class="text-sm text-gray-400">{{ $answer->created_at->toFormattedDateString() }}</span>
                        </li>
                    @empty
                        <p class="text-gray-400">{{ __('message.no-answers') }}</p>
                    @endforelse
                </ul>
            @endif
        </div>

    @endforeach
</x-layouts.app>
