<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        return view('admin.documents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image_uz' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_ru' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_en' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'date' => 'nullable|date',
        ]);

        // Rasmlarni saqlash
        if ($request->hasFile('image_uz')) {
            $validated['image_uz'] = $request->file('image_uz')->store('image_uz', 'public');
        }
        if ($request->hasFile('image_ru')) {
            $validated['image_ru'] = $request->file('image_ru')->store('image_ru', 'public');
        }
        if ($request->hasFile('image_en')) {
            $validated['image_en'] = $request->file('image_en')->store('image_en', 'public');
        }

        // Bo'sh qiymatlarni olib tashlash
        $validated = array_filter($validated, function ($value) {
            return !is_null($value) && $value !== '';
        });

        Document::create($validated);

        return redirect()->route('documents.index')->with('success', 'Document muvaffaqiyatli yaratildi');
    }


    public function edit($id)
    {
        $document = Document::findOrFail($id);
        return view('admin.documents.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image_uz' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_ru' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_en' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'date' => 'nullable|date',
        ]);

        $document = Document::findOrFail($id);

        if ($request->hasFile('image_uz')) {
            if ($document->image_uz) {
                Storage::delete('public/' . $document->image_uz);
            }
            $validated['image_uz'] = $request->file('image_uz')->store('image_uz', 'public');
        }

        if ($request->hasFile('image_ru')) {
            if ($document->image_ru) {
                Storage::delete('public/' . $document->image_ru);
            }
            $validated['image_ru'] = $request->file('image_ru')->store('image_ru', 'public');
        }

        if ($request->hasFile('image_en')) {
            if ($document->image_en) {
                Storage::delete('public/' . $document->image_en);
            }
            $validated['image_en'] = $request->file('image_en')->store('image_en', 'public');
        }

        $document->update($validated);

        return redirect()->route('documents.index')->with('success', 'Documents muvaffaqiyatli yangilandi');
    }



    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Document muvaffaqiyatli o\'chirildi');
    }
}
