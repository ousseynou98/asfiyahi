<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = GalleryImage::all();
        return view('pages.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('pages.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        GalleryImage::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Image added successfully');
    }

    public function show($id)
    {
        $image = GalleryImage::findOrFail($id);
        return view('pages.gallery.show', compact('image'));
    }

    public function edit($id)
    {
        $image = GalleryImage::findOrFail($id);
        return view('pages.gallery.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = GalleryImage::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
            $image->image_path = $imagePath;
        }

        $image->title = $request->title;
        $image->save();

        return redirect()->route('gallery.index')->with('success', 'Image updated successfully');
    }

    public function destroy($id)
    {
        $image = GalleryImage::findOrFail($id);
        $image->delete();

        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully');
    }
}
