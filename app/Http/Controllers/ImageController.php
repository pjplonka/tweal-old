<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function index(): View
    {
        return view('images.index', [
            'images' => Image::all()
        ]);
    }

    public function create(): View
    {
        return view('images.create', [
            'image' => new Image(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'image' => 'required|file',
            'filename' => 'nullable|string',
        ]);

        $image = $request->file('image');

        $imageSize = getimagesize($image);

        $filename = null;
        if ($payload['filename']) {
            $filename = Str::slug($payload['filename']);
        } else {
            $filename = trim($image->getClientOriginalName(), '.' . $image->extension());
        }

        Image::create([
            'filename' => $filename,
            'extension' => $image->extension(),
            'full_name' => $filename . '.' . $image->extension(),
            'content' => $image->get(),
            'width' => $imageSize[0],
            'height' => $imageSize[1],
            'size' => $image->getSize(),
        ]);

        return redirect('/images')->with('success', 'Success.');
    }

    public function edit(Image $image): View
    {
        return view('images.edit', [
            'image' => $image
        ]);
    }

    public function update(Request $request, Image $image): RedirectResponse
    {
        $payload = $request->validate([
            'filename' => 'required|string',
        ]);

        $filename = Str::slug($payload['filename']);

        $image->update([
            'filename' => $filename,
            'full_name' => $filename . '.' . $image->extension,
        ]);

        return redirect('/images')->with('success', 'Success.');
    }

    public function destroy(Image $image): RedirectResponse
    {
        $image->delete();

        return redirect('/images')->with('success', 'Success.');
    }
}
