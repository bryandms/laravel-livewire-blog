<div>
    <h2 class="text-muted text-center">Form post</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label>Title</label>
            <input
                autocomplete="off"
                type="text"
                class="form-control"
                name="title"
                :key="'title'"
                wire:model.debounce.500ms="title"
            />

            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Post</label>
            <textarea
                class="form-control"
                name="body"
                :key="'body'"
                rows="3"
                wire:model.debounce.500ms="body"
            ></textarea>

            @error('body')
                <span class="text-danger">{{ $body }}</span>
            @enderror
        </div>

        <button class="btn btn-block btn-primary" type="submit">Create</button>
    </form>
</div>
