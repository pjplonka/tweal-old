<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view(
            'categories.index',
            [
                'categories' => Category::all(),
            ]
        );
    }

    public function create(): View
    {
        return view('categories.create', [
            'category' => new Category(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => $payload['name'],
            'slug' => Str::slug($payload['name']),
        ]);

        return redirect('/categories')->with('success', 'Success.');
    }

    public function edit(Category $category): View
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $payload = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category->update([
            'name' => $payload['name'],
            'slug' => Str::slug($payload['slug']),
        ]);

        return redirect('/categories')->with('success', 'Success.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect('/categories')->with('success', 'Success.');
    }
}
