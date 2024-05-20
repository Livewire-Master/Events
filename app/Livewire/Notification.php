<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Notification extends Component
{
    /**
     * Notification Message
     *
     * @var string
     */
    public string $message = '';

    /**
     * Notification Visibility
     *
     * @var bool
     */
    public bool $is_visible = false;

    /**
     * Show notification
     *
     * @return void
     */
    #[On('post-created')]
    public function show(): void
    {
        $this->is_visible = true;
        $this->message    = 'new post created';
    }
}
