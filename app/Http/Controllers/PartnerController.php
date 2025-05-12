<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
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
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'website' => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Partner::create($validated);

        return redirect()->route('partners.index')->with('success', 'Partner muvaffaqiyatli yaratildi');
    }

    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.show', compact('partner'));
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
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
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'website' => 'nullable|url',
        ]);

        $partner = Partner::findOrFail($id);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $partner->update($validated);

        return redirect()->route('partners.index')->with('success', 'Partner muvaffaqiyatli yangilandi');
    }


    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner muvaffaqiyatli o\'chirildi');
    }
}
