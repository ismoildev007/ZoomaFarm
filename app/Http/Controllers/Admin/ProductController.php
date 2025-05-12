<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'content_uz' => 'nullable|string',
            'content_ru' => 'nullable|string',
            'content_en' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'video' => 'nullable|url',
            'pdf' => 'nullable|mimes:pdf|max:10200',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

        $galleryPaths = [];
        $pdf = null;

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $gallery) {
                $path = $gallery->store('gallery', 'public');
                $galleryPaths[] = $path;
            }
        }

        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf')->store('pdfs', 'public');
        }

        Product::create([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'content_uz' => $request->content_uz,
            'content_ru' => $request->content_ru,
            'content_en' => $request->content_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'image' => $imagePath,
            'gallery' => json_encode($galleryPaths),
            'video' => $request->video,
            'pdf' => $pdf,
        ]);

        return redirect()->route('products.index')->with('success', 'Mahsulot muvaffaqiyatli yaratildi.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'content_uz' => 'nullable|string',
            'content_ru' => 'nullable|string',
            'content_en' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'video' => 'nullable|url',
            'pdf' => 'nullable|mimes:pdf|max:10200',
        ]);

        $imagePath = $product->image; // agar yangi rasm bo'lmasa, eski saqlanadi
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

        $galleryPaths = json_decode($product->gallery, true) ?? [];
        if ($request->hasFile('gallery')) {
            $galleryPaths = []; // eski fayllarni o'chirsa bo'ladi
            foreach ($request->file('gallery') as $gallery) {
                $path = $gallery->store('gallery', 'public');
                $galleryPaths[] = $path;
            }
        }

        $pdfPath = $product->pdf;
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('pdfs', 'public');
        }

        $product->update([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'content_uz' => $request->content_uz,
            'content_ru' => $request->content_ru,
            'content_en' => $request->content_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'image' => $imagePath,
            'gallery' => json_encode($galleryPaths),
            'video' => $request->video,
            'pdf' => $pdfPath,
        ]);

        return redirect()->route('products.index')->with('success', 'Mahsulot muvaffaqiyatli yangilandi.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }
        if ($product->pdf) {
            Storage::delete('public/' . $product->pdf);
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Mahsulot muvaffaqiyatli o‘chirildi.');
    }
}

