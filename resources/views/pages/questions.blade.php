<x-layouts.app title="{{ __('navbar.questions') }}">
    <div class="overflow-x-auto">
        <button onclick="window.location.href='{{ route('questions.export') }}'" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Export All Questions
        </button>
        <table id="showQuestions" class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-4 py-2">{{ __('question.user') }}</th>
                <th class="px-4 py-2">{{ __('question.code') }}</th>
                <th class="px-4 py-2">{{ __('question.question') }}</th>
                <th class="px-4 py-2">{{ __('question.created_at') }}</th>
                <th class="px-4 py-2">{{ __('question.updated_at') }}</th>
                <th class="px-4 py-2">{{ __('question.active') }}</th>
                <th class="px-4 py-2">{{ __('question.open') }}</th>
                <th class="px-4 py-2">{{ __('question.subject') }}</th>
                <th class="px-4 py-2">{{ __('question.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @livewire('wire-elements-modal')
            @foreach ($questions as $question)
                <tr class="border-b bg-white even:bg-gray-100">
                    <td class="px-4 py-2">
                        @livewire('non-editable-table-cell', ['content' => $question->user->name])
                    </td>
                    <td class="px-4 py-2">
                        <button onclick="Livewire.dispatch('openModal', { component: 'qr-code', arguments: { url: '{{ url('/question/' . $question->code) }}'  }})">{{$question->code}}</button>
                    </td>
                    <td class="px-4 py-2">
                        @livewire('editable-table-cell', ['value' => $question->question, 'model' => $question, 'attribute' => 'question', 'code' => $question->code], key($question->id . '_question'))
                    </td>
                    <td class="px-4 py-2">
                        @livewire('non-editable-table-cell', ['content' => $question->created_at])
                    </td>
                    <td class="px-4 py-2">
                        @livewire('non-editable-table-cell', ['content' => $question->updated_at])
                    </td>
                    <td class="px-4 py-2">
                        @livewire('editable-select-table-cell', ['active' => $question->active, 'options' => [1 => __('question.yes'), 0 => __('question.no')], 'code' => $question->code])
                    </td>
                    <td class="px-4 py-2">
                        @livewire('non-editable-table-cell', ['content' => $question->open == 1 ? __('question.yes') : __('question.no')])
                    </td>
                    <td class="px-4 py-2">
                        @livewire('editable-table-cell', ['value' => $question->subject->name, 'model' => $question->subject, 'attribute' => 'name', 'code' => $question->code], key($question->id . '_subject'))
                    </td>
                    <td class="px-4 py-2 flex space-x-2">
                        <form method="POST" action="{{ route('questions.delete', ['questionId' => $question->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
