<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function viewTags(string $tag = ''): View
    {
        return view('setting.tags', [
            'tag' => Tag::where('tag', $tag)->firstOrNew(),
            'tags' => $this->allTags(),
        ]);
    }

    public function saveTags(string $tag = ''): RedirectResponse
    {
        $new = request()->input('tag');
        Tag::where('tag', $tag)->firstOrNew()->fill(['tag' => $new])->save();

        return redirect('/setting/tags/');
    }

    public function deleteTags(string $tag): RedirectResponse
    {
        Tag::where('tag', $tag)->firstOrFail()->delete();

        return redirect('/setting/tags');
    }

    public function viewBlogs(): View
    {
        return view('setting.blogs', [
            'blogs' => $this->paginateBlog(),
        ]);
    }

    public function viewBlog($id): View
    {
        return view('setting.blog', [
            'blog' => Blog::with('tags')->findOrFail($id),
        ]);
    }

    public function editBlog($id): View
    {
        $id = $id === 'new' ? -1 : $id;

        return view('setting.blog.edit', [
            'blog' => Blog::with('tags')->findOrNew($id),
            'tags' => $this->allTags(),
        ]);
    }

    public function publishBlog($id): RedirectResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->published_at = $blog->published_at ? null : now();
        $blog->save();

        return redirect("/setting/blog/{$blog->id}");
    }

    public function saveBlog($id): RedirectResponse
    {
        $requesst = request()->all();
        $blog = Blog::findOrNew($id);
        $blog->fill($requesst)->save();
        $blog->tags()->sync($requesst['tags'] ?? []);

        return redirect("/setting/blog/{$blog->id}");
    }

    public function deleteBlog($id): RedirectResponse
    {
        Blog::findOrFail($id)->delete();

        return redirect('/setting');
    }

    private function allTags()
    {
        return Tag::all();
    }

    private function paginateBlog(?callable $condition = null)
    {
        return Blog::with('tags')->when($condition, $condition)->orderByDesc('id')->paginate(6);
    }
}
