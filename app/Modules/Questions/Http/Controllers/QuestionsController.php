<?php

namespace App\Modules\Questions\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AskQuestionRequest;
use Illuminate\Http\Request;
use App\Modules\Questions\Models\Question;

class QuestionsController extends Controller
{
    public function index()
    {
        // DB::enableQueryLog();
        $questions = Question::with('user')->latest()->paginate(10);

        return view('questions.index', compact('questions'));
        // view('questions.index', compact('questions'))->render();
        // dd(DB::getQueryLog());
    }

    public function create()
    {
        $question = new Question(); 
        
        return view('Questions::create', compact('question'));
    }

    public function store(AskQuestionRequest $request)
    {
        $request->user()->questions()->create($request->all());

        return redirect()->route('question.index')->with('success', 'Your question has been submitted.');
    }

    public function edit(Question $question)
    {
        return view('Questions::edit', compact('question'));
    }

    public function update(AskQuestionRequest $request, Question $question){
        $question->update($request->all());
        return redirect()->route('question.index')->with('success', 'Your question has been updated');
    }

    public function show(Question $question)
    {
        $question->increment('views');

        return view('Questions::show', compact('question'));
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('question.index')->with('success', 'Your question has been deleted.');
    }
}
