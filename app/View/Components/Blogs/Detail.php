<?php

namespace App\View\Components\Blogs;

use App\Models\Blog;
use Illuminate\View\Component;
use Illuminate\View\View;

class Detail extends Component
{
    public function __construct(
        public Blog $blog,
    ) {
    }

    public function render(): View
    {
        return view('components.blogs.detail');
    }
}
