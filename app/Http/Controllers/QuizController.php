<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $learnings = Learning::with('quiz', 'participant')->get();
        return view('admin.quiz.index', [
            'learnings' => $learnings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $learnings = Learning::all();
        return view('admin.quiz.create', [
            'learnings' => $learnings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validQuiz = $request->validate([
            'learning_id'     => 'required',
            'question'    => 'required|min:8',
            'option_a'     => 'required|min:5',
            'option_b'     => 'required|min:5',
            'option_c'     => 'required|min:5',
            'option_d'     => 'required|min:5',
            'option_true'     => 'required|min:5',
        ]);

        Quiz::create($validQuiz);

        return redirect('/admin/quiz')->with('success', 'Quiz berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
