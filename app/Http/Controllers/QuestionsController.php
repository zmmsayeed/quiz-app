<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;
use App\Choice as Choice;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->text = $request->question_text;
        $question->quiz_id = $request->topic;
        $question->save();

        $choice1 = new Choice;
        $choice1->is_correct = $request->choice1_is_correct;
        $choice1->text = $request->choice1;
        $question->choices()->save($choice1);

        $choice2 = new Choice;
        $choice2->is_correct = $request->choice2_is_correct;
        $choice2->text = $request->choice2;
        $question->choices()->save($choice2);
        
        $choice3 = new Choice;
        $choice3->is_correct = $request->choice3_is_correct;
        $choice3->text = $request->choice3;
        $question->choices()->save($choice3);
        
        $choice4 = new Choice;
        $choice4->is_correct = $request->choice4_is_correct;
        $choice4->text = $request->choice4;
        $question->choices()->save($choice4);
        
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
