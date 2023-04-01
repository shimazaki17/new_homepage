<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Link extends Component
{
    public function __construct(
        public string $link,
        public bool $blank = false,
    ) {
    }

    public function render(): View
    {
        return view('components.link');
    }
}
