<?php

namespace App\View\Components\Blogs;

use App\Models\Blog;
use Illuminate\View\Component;
use Illuminate\View\View;

class Item extends Component
{
    public function __construct(
        public Blog $blog,
        public string $base = '',
    ) {
    }

    public function render(): View
    {
        return view('components.blogs.item');
    }
}
