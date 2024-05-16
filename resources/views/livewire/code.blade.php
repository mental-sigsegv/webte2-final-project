<div>
    <form wire:submit="send">
        <input wire:model="code" type="text" pattern="[A-Za-z0-9]{5}" title="Please enter a 5-letter code" maxlength="5" placeholder="Enter 5-letter code">
        <button type="submit">Save</button>
    </form>
</div>
