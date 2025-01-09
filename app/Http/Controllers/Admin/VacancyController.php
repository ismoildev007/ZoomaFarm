<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        return view('admin.vacancies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'nullable|string',
            'name_ru' => 'nullable|string',
            'name_en' => 'nullable|string',
            'title_uz' => 'nullable|string',
            'title_ru' => 'nullable|string',
            'title_en' => 'nullable|string',
            'content_uz' => 'nullable|string',
            'content_ru' => 'nullable|string',
            'content_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Fayl validatsiyasi
            'date' => 'nullable|date',
            'status' => 'nullable|string',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images/vacancies', 'public');
        }

        Vacancy::create([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'content_uz' => $request->content_uz,
            'content_ru' => $request->content_ru,
            'content_en' => $request->content_en,
            'image' => $image,
            'date' => $request->date,
            'status' => $request->status,
        ]);

        return redirect()->route('vacancies.index')->with('success', 'Vakansiya muvaffaqiyatli qo\'shildi.');
    }

    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('admin.vacancies.edit', compact('vacancy'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_uz' => 'nullable|string',
            'name_ru' => 'nullable|string',
            'name_en' => 'nullable|string',
            'title_uz' => 'nullable|string',
            'title_ru' => 'nullable|string',
            'title_en' => 'nullable|string',
            'content_uz' => 'nullable|string',
            'content_ru' => 'nullable|string',
            'content_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Fayl validatsiyasi
            'date' => 'nullable|date',
            'status' => 'nullable|string',
        ]);

        $vacancy = Vacancy::findOrFail($id);

        $image = $vacancy->image;

        if ($request->hasFile('image')) {
            if ($image) {
                Storage::delete('public/' . $image); // Eski faylni o'chirish
            }
            $image = $request->file('image')->store('images/vacancies', 'public');
        }

        $vacancy->update([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'content_uz' => $request->content_uz,
            'content_ru' => $request->content_ru,
            'content_en' => $request->content_en,
            'image' => $image,
            'date' => $request->date,
            'status' => $request->status,
        ]);

        return redirect()->route('vacancies.index')->with('success', 'Vakansiya muvaffaqiyatli yangilandi.');
    }

    public function destroy($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        if ($vacancy->image) {
            Storage::delete('public/' . $vacancy->image);
        }

        $vacancy->delete();

        return redirect()->route('vacancies.index')->with('success', 'Vakansiya muvaffaqiyatli o\'chirildi.');
    }
}
