<?php

namespace App\View\Components\Blogs;

use App\Models\Blog;
use Illuminate\View\Component;
use Illuminate\View\View;

class Item extends Component
{
    public Blog $blog;

    public string $base;

    public function __construct(Blog $blog, string $base = '')
    {
        $this->blog = $blog;
        $this->base = $base;
    }

    public function render(): View
    {
        return view('components.blogs.item');
    }
}
