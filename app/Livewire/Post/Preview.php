<?php

namespace App\Livewire\Post;

use App\Models\Post;
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
}
