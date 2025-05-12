<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnswerQuestion;


class AnswerQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $answers = AnswerQuestion::all();
        return view('admin.answer_questions.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.answer_questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_uz' => 'nullable|string',
            'answer_uz' => 'nullable|string',
            'question_ru' => 'nullable|string',
            'answer_ru' => 'nullable|string',
            'question_en' => 'nullable|string',
            'answer_en' => 'nullable|string',
            'type' => 'nullable|string',
        ]);

        AnswerQuestion::create($request->all());

        return redirect()->route('answer-questions.index')->with('success', 'Savol va javoblar muvaffaqiyatli saqlandi.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $answer = AnswerQuestion::findOrFail($id);
        return view('admin.answer_questions.show', compact('answer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $answer = AnswerQuestion::findOrFail($id);
        return view('admin.answer_questions.edit', compact('answer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question_uz' => 'nullable|string',
            'answer_uz' => 'nullable|string',
            'question_ru' => 'nullable|string',
            'answer_ru' => 'nullable|string',
            'question_en' => 'nullable|string',
            'answer_en' => 'nullable|string',
            'type' => 'nullable|string',
        ]);

        $answer = AnswerQuestion::findOrFail($id);
        $answer->update($request->all());

        return redirect()->route('answer-questions.index')->with('success', 'Savol va javoblar muvaffaqiyatli yangilandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $answer = AnswerQuestion::findOrFail($id);
        $answer->delete();

        return redirect()->route('answer-questions.index')->with('success', 'Savol o‘chirildi.');
    }
}
