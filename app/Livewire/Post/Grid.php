<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Grid extends Component
{
    /**
     * Clicks count
     *
     * @var int
     */
    public int $clicks = 0;

    /**
     * Add a click
     *
     * @return void
     */
    public function clicked(): void
    {
        $this->clicks++;
    }

    /**
     * Update Posts List
     *
     * @return void
     */
    #[On('post-created')]
    public function updatePostsList(): void
    {
        $this->dispatch('$refresh');
    }

    /**
     * Get all posts list
     *
     * @return Collection
     */
    #[Computed]
    public function posts(): Collection
    {
        return Post::all();
    }

    /**
     * Update Posts List
     *
     * @return void
     */
    public function updateList(): void
    {
        $this->dispatch('$refresh');
    }

    /**
     * Toggle post status and dispatch renderer
     *
     * @param int $id
     *
     * @return void
     */
    public function togglePost(int $id): void
    {
        $post = Post::find($id);
        $post->update(
            [
                'is_published' => !$post->is_published,
            ]
        );
        $this->dispatch("post-updated.$post->id");
    }
}
