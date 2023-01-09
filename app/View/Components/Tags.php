<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class Tags extends Component
{
    public Collection $tags;

    public string $base;

    public function __construct(Collection $tags, string $base = '')
    {
        $this->tags = $tags;
        $this->base = $base;
    }

    public function render(): View
    {
        return view('components.tags');
    }
}
