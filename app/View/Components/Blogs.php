<?php

namespace App\View\Components;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;
use Illuminate\View\View;

class Blogs extends Component
{
    public LengthAwarePaginator $blogs;

    public string $title;

    public string $base;

    public function __construct(LengthAwarePaginator $blogs, string $title = '', string $base = '')
    {
        $this->blogs = $blogs;
        $this->title = $title;
        $this->base = $base;
    }

    public function render(): View
    {
        return view('components.blogs');
    }
}
