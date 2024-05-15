<x-layouts.app>
    <table id="showQuestions" class="table table-bordered">
        <thead>
        <tr>
            <th>User</th>
            <th>Code</th>
            <th>Question</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Active</th>
            <th>Open</th>
            <th>Subject</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($questionsData as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->code }}</td>
                <td>{{ $data->question }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->active == 1 ? 'Yes' : 'No' }}</td>
                <td>{{ $data->open == 1 ? 'Yes' : 'No'  }}</td>
                <td>{{ $data->subjectName }}</td>
                <td>
                    <form method="POST" action="{{ route('questions.delete', ['questionId' => $data->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="{{ route('questions.update', ['questionId' => $data->id]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layouts.app>
