<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Strategy;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $strategies = Strategy::all();
        return view('admin.strategy.index', compact('strategies'));
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
        $strategy = Strategy::findOrFail($id); // ✔ faqat kerakli bitta mission
        return view('admin.strategy.edit', compact('strategy'));
    }


    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $id)
    {
        $strategy = Strategy::findOrFail($id);

        // 1. Validatsiya
        $validated = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_uz' => 'required|string',
            'description_ru' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // 2. Faylni saqlash (agar mavjud bo‘lsa)
        if ($request->hasFile('image')) {
            // Eski rasmni o‘chirish (agar mavjud bo‘lsa)
            if ($strategy->image && \Storage::exists($strategy->image)) {
                \Storage::delete($strategy->image);
            }

            // Yangi rasmni saqlash
            $validated['image'] = $request->file('image')->store('strategy', 'public');
        }

        // 3. Yangilash
        $strategy->update($validated);

        // 4. Qaytish
        return redirect()->route('strategy.index')->with('success', 'Ma\'lumotlar muvaffaqiyatli yangilandi.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
