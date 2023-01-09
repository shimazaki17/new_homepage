<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Tag extends Component
{
    public string $tag;

    public string $link;

    /**
     * Create a new component instance.
     *
     * @param   string  $tag
     * @return  void
     */
    public function __construct(string $tag, string $link)
    {
        $this->tag = $tag;
        $this->link = $link;
    }

    public function render(): View
    {
        return view('components.tag');
    }
}
