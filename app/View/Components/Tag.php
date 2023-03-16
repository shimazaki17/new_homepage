<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Tag extends Component
{
    /**
     * Create a new component instance.
     *
     * @param   string  $tag
     * @return  void
     */
    public function __construct(
        public string $tag,
        public string $link,
    ) {
    }

    public function render(): View
    {
        return view('components.tag');
    }
}
