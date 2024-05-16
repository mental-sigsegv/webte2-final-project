    <x-layouts.app>
        <div class="overflow-x-auto">
            <table id="showQuestions" class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">User</th>
                    <th class="px-4 py-2">Code</th>
                    <th class="px-4 py-2">Question</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Updated At</th>
                    <th class="px-4 py-2">Active</th>
                    <th class="px-4 py-2">Open</th>
                    <th class="px-4 py-2">Subject</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($questionsData as $data)
                    <tr class="border-b bg-white even:bg-gray-100">
                        <td class="px-4 py-2">{{ $data->name }}</td>
                        <td class="px-4 py-2">{{ $data->code }}</td>
                        <td class="px-4 py-2">{{ $data->question }}</td>
                        <td class="px-4 py-2">{{ $data->created_at }}</td>
                        <td class="px-4 py-2">{{ $data->updated_at }}</td>
                        <td class="px-4 py-2">
                            <select name="active">
                                <option value="1" {{ $data->active == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $data->active == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </td>
                        <td class="px-4 py-2">{{ $data->open == 1 ? 'Yes' : 'No'}}</td>
                        <td class="px-4 py-2">{{ $data->subjectName }}</td>
                        <td class="px-4 py-2 flex space-x-2">
                            <form method="POST" action="{{ route('questions.delete', ['questionId' => $data->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>

                                </button>
                            </form>
                            <form method="POST" action="{{ route('questions.update', ['questionId' => $data->id]) }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="active" id="active" value="{{ $data->active }}">
                                <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
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

    <script>
        document.getElementById('showQuestions').addEventListener('change', function(event) {
            if (event.target && event.target.nodeName === 'SELECT' && event.target.name === 'active') {
                const activeInput = event.target.closest('tr').querySelector('input[name="active"]');
                activeInput.value = event.target.value;
            }
        });
    </script>
