<div>
    <h2>
        Create Post
    </h2>
    <p>
        Fill the form below to create a new post
    </p>
    <form wire:submit.prevent="create">
        <div>
            <label for="input-title">
                Title <span style="color: orangered">*</span>
            </label>
            <br>
            <input
                wire:model="title"
                id="input-title"
                name="title"
                type="text"
            >
        </div>

        <br>

        <div>
            <label for="input-description">
                Description <span style="color: orangered">*</span>
            </label>
            <br>
            <textarea
                wire:model="description"
                id="input-description"
                name="description"
                rows="7"
                cols="40"
            ></textarea>
        </div>

        <button type="submit">
            Create New Post
        </button>
    </form>
</div>

@script
<script>
    Livewire.on('hide', () =>
    {
        console.log('listen to "hide" event from "post.create" component')
    }
    );
</script>
@endscript
