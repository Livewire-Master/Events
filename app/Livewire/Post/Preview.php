<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class Preview extends Component
{
    /**
     * Current Post
     *
     * @var Post
     */
    public Post $post;

    /**
     * Mount the component
     *
     * @param Post $post
     *
     * @return void
     */
    public function mount(Post $post): void
    {
        $this->post = $post;
    }

    /**
     * Refresh current post
     *
     * @return void
     */
    #[On('post-updated.{post.id}')]
    public function refreshPost(): void
    {
        $this->dispatch('$refresh');
    }

    /**
     * Delete Current Post and Dispatch it up
     *
     * @return void
     */
    public function delete(): void
    {
        $this->post->delete();
        $this->dispatch('deleted');
    }
}
