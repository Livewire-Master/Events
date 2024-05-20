<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Create extends Component
{
    /**
     * Post Title
     *
     * @var string
     */
    public string $title = '';

    /**
     * Post Description
     *
     * @var string
     */
    public string $description = '';

    /**
     * Rules object
     *
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'title'       => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
        ];
    }

    /**
     * Create a new post and dispatch its event
     *
     * @return void
     */
    public function create(): void
    {
        $this->validate();

        // create a post

        // dispatch its event
    }
}
