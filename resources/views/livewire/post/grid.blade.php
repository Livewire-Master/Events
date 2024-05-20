<div>
    <h3>
        Posts Grid
    </h3>
    <p>
        Last Update: {{ time() }}
    </p>

    @foreach($this->posts() as $post)
        <div wire:key="post-item-wrapper-{{ $post->id }}">
            <livewire:post.preview
                @deleted="updateList"
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
