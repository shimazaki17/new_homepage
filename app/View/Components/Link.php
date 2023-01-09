<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Link extends Component
{
    public string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }

    public function render(): View
    {
        return view('components.link');
    }
}
