<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('articles.index', [
            'articles' => Article::all(),
        ]);
    }

    public function create(): View
    {
        return view('articles.create', [
            'article' => new Article(),
            'categories' => Category::all(),
            'images' => Image::all(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'category_id' => 'required',
            'image_id' => 'nullable|integer',
            'title' => 'required',
            'content' => 'string|nullable',
        ]);

        Article::create([
            'category_id' => $payload['category_id'],
            'image_id' => $payload['image_id'],
            'title' => $payload['title'],
            'slug' => Str::slug($payload['title']),
            'content' => $payload['content'],
            'published_at' => $payload['published_at'] ?? Carbon::now(),
        ]);

        return redirect('/articles')->with('success', 'Success.');
    }

    public function edit(Article $article): View
    {
        return view('articles.edit', [
            'article' => $article,
            'categories' => Category::all(),
            'images' => Image::all(),
        ]);
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $payload = $request->validate([
            'category_id' => 'required',
            'image_id' => 'nullable|integer',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'string|nullable',
        ]);

        $article->update([
            'category_id' => $payload['category_id'],
            'image_id' => $payload['image_id'],
            'title' => $payload['title'],
            'slug' => Str::slug($payload['slug']),
            'content' => $payload['content'],
        ]);

        return redirect('/articles')->with('success', 'Success.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect('/articles')->with('success', 'Success.');
    }
}
