<div>
    <button type="button" wire:click="addOption">Add</button>
    @foreach($options as $option)
        @livewire('question-option', ['key' => $option], key($option))
    @endforeach
</div>
