<div>
    <form wire:submit.prevent="savePost" enctype="multipart/form-data">
        <div>
            <label for="title">Name:</label>
            <input type="text" wire:model="name">
            @error('title') <span>{{ $message }}</span> @enderror
        </div>
        
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</div>
