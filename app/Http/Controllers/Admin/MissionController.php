<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $missions = Mission::all();
        return view('admin.mission.index', compact('missions'));
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
        $mission = Mission::findOrFail($id); // ✔ faqat kerakli bitta mission
        return view('admin.mission.edit', compact('mission'));
    }


    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $id)
    {
        $mission = Mission::findOrFail($id);

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
            if ($mission->image && \Storage::exists($mission->image)) {
                \Storage::delete($mission->image);
            }

            // Yangi rasmni saqlash
            $validated['image'] = $request->file('image')->store('mission', 'public');
        }

        // 3. Yangilash
        $mission->update($validated);

        // 4. Qaytish
        return redirect()->route('missions.index')->with('success', 'Ma\'lumotlar muvaffaqiyatli yangilandi.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
