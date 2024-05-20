<div>
    ID: {{ $post->id }}
    <br>
    Title: {{ $post->title }}
    <br>
    Description: {{ $post->description }}
    <br>
    Status: {{ $post->is_published ? 'Published' : 'Draft' }}
    <br>
    Last Update: {{ time() }}
    <br>
    <button wire:click.prevent="delete">
        Delete
    </button>
    <button wire:click.prevent="$parent.clicked()">
        Click
    </button>
</div>
