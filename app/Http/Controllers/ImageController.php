<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'section' => 'required|string',
        ]);

        $path = $request->file('image')->store('uploads', 'public');

        Image::create([
            'image_path' => $path,
            'section' => $request->section,
        ]);

        return redirect()->route('images.index')->with('success', 'Rasm saqlandi');
    }

    public function edit(Image $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    public function update(Request $request, Image $image)
    {
        $request->validate([
            'section' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            
            if ($image->image_path) {
                $oldPath = str_replace('/storage/', '', $image->image_path);
                Storage::disk('public')->delete($oldPath);
            }

            
            $path = $request->file('image')->store('uploads', 'public');

            $image->image_path = $path;
        }

        $image->section = $request->section;
        $image->save();

        return redirect()->route('images.index')->with('success', 'Rasm yangilandi');
    }

    public function destroy(Image $image)
    {
        if ($image->image_path) {
            $oldPath = str_replace('/storage/', '', $image->image_path);
            Storage::disk('public')->delete($oldPath);
        }

        $image->delete();
        return redirect()->route('images.index')->with('success', 'Rasm o‘chirildi');
    }
}
