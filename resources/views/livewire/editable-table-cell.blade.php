<div>
    @if($editing)
        <input type="text" wire:model="value" wire:keydown.enter="save">
    @else
        <span wire:click="toggleEdit">{{ $value }}</span>
    @endif
</div>
