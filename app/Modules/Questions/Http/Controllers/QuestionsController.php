<?php

namespace App\Modules\Questions\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        return $request;
    }
}
