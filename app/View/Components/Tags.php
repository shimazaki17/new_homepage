<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class Tags extends Component
{
    public function __construct(
        public Collection $tags,
        public string $base = '',
    ) {
    }

    public function render(): View
    {
        return view('components.tags');
    }
}
