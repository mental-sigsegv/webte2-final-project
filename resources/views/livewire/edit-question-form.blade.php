<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        @csrf

        <div>
            <label for="question">Question</label>
            <input type="text" id="question" wire:model="question">
            @error('question') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="subject">Subject</label>
            <input type="text" id="subject" wire:model="subject_name">
            @error('subject_name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="active">Active</label>
            <input type="checkbox" id="active" wire:model="active">
            @error('active') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Save</button>
    </form>
</div>
