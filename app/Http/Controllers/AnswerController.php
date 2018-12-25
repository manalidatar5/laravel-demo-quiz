<?php

namespace App\Http\Controllers;

use App\Question;
use App\Quizuser;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnswerController extends Controller
{

    public function index()
    {
        $Question = Question::all();

        $name = input::get('username');

        $check_ans = DB::Table('questions')->select('Answer')->get()->toArray();

        $answer1 = Input::get(1);
        $answer2 = Input::get(2);
        $answer3 = Input::get(3);
        $answer4 = Input::get(4);
        $answer5 = Input::get(5);

        $score = 0;

        if ($answer1 == $check_ans[0]->Answer) {

            $score++;
        }
        if ($answer2 == $check_ans[1]->Answer) {

            $score++;
        }
        if ($answer3 == $check_ans[2]->Answer) {

            $score++;
        }
        if ($answer4 == $check_ans[3]->Answer) {

            $score++;
        }
        if ($answer5 == $check_ans[4]->Answer) {

            $score++;
        }

        $data['result'] = $score;
        $data['name'] = $name;

        try {
            Quizuser::create(['Name' => $name, 'Score' => $score]);

            $bestscore = DB::table('Quizuser')->select('id', 'Name', 'Score')->where('Score', '>', 4)->get();

            $data['bestscore'] = $bestscore;

        } catch (\Exception $ex) {

            Log::info("Some Error Occured while saving score" . $ex->getMessage());
        }

        return view('result', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
