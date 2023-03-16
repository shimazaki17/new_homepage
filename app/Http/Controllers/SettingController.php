<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Exception;
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
        try {
            $new = request()->input('tag');
            Tag::where('tag', $tag)->firstOrNew()->fill(['tag' => $new])->save();
            session()->flash('message', ['value' => 'タグを登録しました']);
        } catch (Exception $e) {
            session()->flash('message', ['value' => '登録に失敗しました', 'error' => true]);
        }

        return redirect('/setting/tags/');
    }

    public function deleteTags(string $tag): RedirectResponse
    {
        try {
            Tag::where('tag', $tag)->firstOrFail()->delete();
            session()->flash('message', ['value' => 'タグを削除しました']);
        } catch (Exception $e) {
            session()->flash('message', ['value' => '削除に失敗しました', 'error' => true]);
        }

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
        try {
            $blog = Blog::findOrFail($id);
            $blog->published_at = $blog->published_at ? null : now();
            $blog->save();
            session()->flash('message', ['value' => 'ブログを更新しました']);
        } catch (Exception $e) {
            session()->flash('message', ['value' => '更新に失敗しました', 'error' => true]);
        }

        return redirect("/setting/blog/{$blog->id}");
    }

    public function saveBlog($id): RedirectResponse
    {
        $id = $id === 'new' ? -1 : $id;

        try {
            $requesst = request()->all();
            $blog = Blog::findOrNew($id);
            $blog->fill($requesst)->save();
            $blog->tags()->sync($requesst['tags'] ?? []);
            session()->flash('message', ['value' => 'ブログを登録しました']);
        } catch (Exception $e) {
            session()->flash('message', ['value' => '登録に失敗しました', 'error' => true]);
        }

        return redirect("/setting/blog/{$blog->id}");
    }

    public function deleteBlog($id): RedirectResponse
    {
        try {
            Blog::findOrFail($id)->delete();
            session()->flash('message', ['value' => 'ブログを削除しました']);
        } catch (Exception $e) {
            session()->flash('message', ['value' => '削除に失敗しました', 'error' => true]);
        }

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
