<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Values;
use Illuminate\Http\Request;

class ValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $values = Values::all();
        return view('admin.values.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $values = Values::findOrFail($id);
        return view('admin.values.edit', compact('values'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // So‘rovni tekshiramiz
    $validated = $request->validate([
        'title_uz' => 'required|string|max:255',
        'description_uz' => 'required|string',
        'title_en' => 'required|string|max:255',
        'description_en' => 'required|string',
        'title_ru' => 'required|string|max:255',
        'description_ru' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);

    
    $value = Values::findOrFail($id);

    
    if ($request->hasFile('image')) {
        
        if ($value->image && \Storage::disk('public')->exists($value->image)) {
            \Storage::disk('public')->delete($value->image);
        }

        
        $path = $request->file('image')->store('values', 'public');
        $value->image = $path;
    }

    
    $value->update([
        'title_uz' => $validated['title_uz'],
        'description_uz' => $validated['description_uz'],
        'title_en' => $validated['title_en'],
        'description_en' => $validated['description_en'],
        'title_ru' => $validated['title_ru'],
        'description_ru' => $validated['description_ru'],
        'image' => $value->image,
    ]);

    return redirect()->route('values.index')->with('success', 'Qiymat muvaffaqiyatli yangilandi!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
