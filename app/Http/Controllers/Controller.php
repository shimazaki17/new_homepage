<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Blog;
use App\Models\Tag;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * ブログトップ
     */
    public function blogs(): View
    {
        return view('blogs', [
            'tags' => $this->allTags(),
            'blogs' => $this->paginateBlog(),
        ]);
    }

    /**
     * タグ一覧
     *
     * @param string    $tag
     */
    public function tags($tag): View
    {
        return view('tags', [
            'tag' => $tag,
            'tags' => $this->allTags(),
            'blogs' => $this->paginateBlog(
                fn ($query) => $query->whereRelation('tags', 'tag', $tag)
            ),
        ]);
    }

    /**
     * ブログ詳細
     *
     * @param number    $id
     */
    public function blog($id): View
    {
        return view('blog', [
            'blog' => Blog::with('tags')->published()->findOrFail($id),
            'blogs' => $this->paginateBlog()->withPath('/'),
        ]);
    }

    private function allTags()
    {
        return Tag::all();
    }

    private function paginateBlog(?callable $condition = null)
    {
        return Blog::when($condition, $condition)->published()->orderByDesc('id')->paginate(6);
    }

    public function contact(): RedirectResponse
    {
        $request = request()->except(['_token', 'title']);
        $title = request()->input('title');
        try {
            Mail::to($request['メールアドレス'])->send(new Contact($title, $request));
            session()->flash('message', ['value' => 'お問い合わせを受け付けました']);
        } catch (Exception $e) {
            Log::error($e);
            session()->flash('message', ['value' => '受け付けに失敗しました', 'error' => true]);
        }

        return back();
    }
}
