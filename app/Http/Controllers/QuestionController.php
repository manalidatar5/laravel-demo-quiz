<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quizuser;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\InputArgument;

class QuestionController extends Controller
{

    public function index()
    {
        $Quizuser = Quizuser::all();

        if (Auth::check()) {

            $username = Input::get('username');

            $questions = DB::table('questions')->select('question_name', 'Answer1', 'Answer2', 'Answer3', 'Answer4')->get();

            return view('questionview', array('questions' => $questions, 'username' => $username));

        }
    }


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $Quizuser = new Quizuser;
//
//        $Quizuser->Name = $request->uname;
//
//        $Quizuser->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
