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
</div>
