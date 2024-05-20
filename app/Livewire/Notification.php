<?php

namespace App\Livewire;

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
}
