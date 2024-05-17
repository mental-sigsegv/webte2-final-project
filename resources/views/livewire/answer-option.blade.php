<div>
    <h2>Options:</h2>
    <form wire:submit.prevent="submitSelected">
        <ul>
            @foreach($options as $option)
                <li>
                    <input type="checkbox" wire:model="selectedOptions" value="{{ $option->id }}">
                    {{ $option->option }}
                </li>
            @endforeach
        </ul>
        <button type="submit">Submit Selected Options</button>
    </form>
</div>
