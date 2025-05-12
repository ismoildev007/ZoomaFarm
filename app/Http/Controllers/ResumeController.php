<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Resume;
use App\Models\Vacancy;

class ResumeController extends Controller
{
    public function create()
    {
        $vacancies = Vacancy::all();
        return view('admin.resumes.create', compact('vacancies'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'position_applied' => 'nullable|string',
            'cv_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'nullable|string',
        ]);


        $cvFileName = $request->file('cv_file')->getClientOriginalName();
        $cvPath = $request->file('cv_file')->storeAs('resumes', $cvFileName, 'public');

        Resume::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position_applied' => $request->position_applied,
            'cv_file' => $cvPath,
            'cover_letter' => $request->cover_letter,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Rezyume muvaffaqiyatli yuborildi!');
    }

        public function destroy($id)
    {
        $resume = Resume::findOrFail($id);

        if ($resume->cv_file && \Storage::disk('public')->exists($resume->cv_file)) {
            \Storage::disk('public')->delete($resume->cv_file);
        }

        $resume->delete();

        return redirect()->back()->with('success', 'Rezyume o‘chirildi.');
    }

        public function updateStatus(Request $request, $id)
    {
        $resume = Resume::findOrFail($id);


        $resume->status = $request->status;
        $resume->save();

        return redirect()->route('resumes.index')->with('success', 'Status muvaffaqiyatli yangilandi!');
    }

    public function index()
    {
        $resumes = Resume::latest()->paginate(10);
        return view('admin.resumes.index', compact('resumes'));
    }
}

