<x-layouts.app title="{{ __('navbar.answers') }}">
    <h1>{{ __('message.question') }}: {{ $question->question }}</h1>
    @if ($question->open == 0)
        <h2>{{ __('navbar.answers') }}:</h2>
{{--        <ul>--}}
{{--            @forelse ($question->answers as $answer)--}}
{{--                @php--}}
{{--                    $option = $answer->option;--}}
{{--                @endphp--}}
{{--                <li>--}}
{{--                    {{ $option->option }}--}}
{{--                    @if ($option->correct == 1)--}}
{{--                        <strong>(Correct)</strong>--}}
{{--                    @elseif ($option->correct == 0)--}}
{{--                        <strong>(Wrong)</strong>--}}
{{--                    @endif--}}
{{--                    - ({{ $answer->created_at->toFormattedDateString() }})--}}
{{--                </li>--}}
{{--            @empty--}}
{{--                <p>No answers yet.</p>--}}
{{--            @endforelse--}}
{{--        </ul>--}}

        <canvas id="answerChart" style="width: 100px; height: 100px;"></canvas>
        <script>
            var ctx = document.getElementById('answerChart').getContext('2d');
            var answerChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: @json($labels),
                    datasets: [{
                        data: @json($data),
                        backgroundColor: @json($backgroundColors),
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw;
                                }
                            }
                        }
                    }
                }
            });
        </script>
    @else
        <h2>{{ __('navbar.answers') }}:</h2>
        <ul>
            @forelse ($question->answers as $answer)
                <li>{{ $answer->answer }} ({{ $answer->created_at->toFormattedDateString() }})</li>
            @empty
                <p>{{ __('message.no-answers') }}</p>
            @endforelse
        </ul>
    @endif
</x-layouts.app>
