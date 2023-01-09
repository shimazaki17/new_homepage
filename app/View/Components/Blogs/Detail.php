<?php

namespace App\View\Components\Blogs;

use App\Models\Blog;
use Illuminate\View\Component;
use Illuminate\View\View;

class Detail extends Component
{
    public Blog $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function render(): View
    {
        return view('components.blogs.detail');
    }
}
