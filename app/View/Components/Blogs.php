<?php

namespace App\View\Components;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;
use Illuminate\View\View;

class Blogs extends Component
{
    public function __construct(
        public LengthAwarePaginator $blogs,
        public string $title = '',
        public string $base = '',
    ) {
    }

    public function render(): View
    {
        return view('components.blogs');
    }
}
