<?php

namespace App\Http\Controllers;

use App\Models\Responsibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResponsibilityController extends Controller
{
    public function index()
    {
        $items = Responsibility::latest()->paginate(10);
        return view('admin.responsibility.index', compact('items'));
    }

    public function create()
    {
        return view('admin.responsibility.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_uz' => 'required|string',
            'title_ru' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image',
            'attachment' => 'nullable|file',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('responsibility/images', 'public');
        }

        if ($request->hasFile('attachment')) {
            $data['attachment'] = $request->file('attachment')->store('responsibility/files', 'public');
        }

        Responsibility::create($data);
        return redirect()->route('responsibility.index')->with('success', 'Maʼlumot qo‘shildi');
    }

    public function edit($id)
    {
        $responsibility = Responsibility::findOrFail($id);
        return view('admin.responsibility.edit', compact('responsibility'));
    }

    public function update(Request $request, Responsibility $responsibility)
    {
        $data = $request->validate([
            'title_uz' => 'required|string',
            'title_ru' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image',
            'attachment' => 'nullable|file',
        ]);

        if ($request->hasFile('image')) {
            if ($responsibility->image) {
                Storage::disk('public')->delete($responsibility->image);
            }
            $data['image'] = $request->file('image')->store('responsibility/images', 'public');
        }

        if ($request->hasFile('attachment')) {
            if ($responsibility->attachment) {
                Storage::disk('public')->delete($responsibility->attachment);
            }
            $data['attachment'] = $request->file('attachment')->store('responsibility/files', 'public');
        }

        $responsibility->update($data);
        return redirect()->route('responsibility.index')->with('success', 'Maʼlumot yangilandi');
    }

    public function destroy(Responsibility $responsibility)
    {
        if ($responsibility->image) {
            Storage::disk('public')->delete($responsibility->image);
        }

        if ($responsibility->attachment) {
            Storage::disk('public')->delete($responsibility->attachment);
        }

        $responsibility->delete();
        return redirect()->route('responsibility.index')->with('success', 'O‘chirildi');
    }
}
