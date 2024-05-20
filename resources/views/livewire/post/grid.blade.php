<div>
    <h3>
        Posts Grid
    </h3>

    @foreach($this->posts() as $post)
        <div>
            <livewire:post.preview
                wire:key="post-item-{{ $post->id }}"
                :post="$post"
            />
            <button wire:click.prevent="togglePost({{ $post->id }})">
                Toggle Post Status
            </button>
            <hr>
        </div>
    @endforeach
</div>
