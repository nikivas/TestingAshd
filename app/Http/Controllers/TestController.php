<?php

namespace App\Http\Controllers;

use App\Test;
use App\UserTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $tests = Test::all();
        $solvedTests = UserTest::where('user_id', '=', $user['id'])->get();
        $solvedTestsDictionary = [];
        // dd($solvedTests);
        foreach ($solvedTests as $el) {
            if(isset($solvedTestsDictionary[$el['test_id']]))
                $solvedTestsDictionary[$el['test_id']] = max($solvedTestsDictionary[$el['test_id']], $el['is_solved']);
            else
                $solvedTestsDictionary[$el['test_id']] = $el['is_solved']; 
        }

        foreach ($tests as $el) {
            $el['isSolved'] = $solvedTestsDictionary[$el['id']] ?? null;
        }

        return view('tests/index')->with('tests',$tests);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        $solvedTests = UserTest::all()
            ->where('user_id', '=', Auth::user())
            ->where('test_id', '=', $test['id']);
        if(count($solvedTests) != 0 || $test == null)
        {
            return redirect()->route('tests.index');
        }
        return view('tests.show')->with('test', $test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }

    public function check(Request $request, $id){
        $rules = ['answer' => 'required|string|min:1'];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) 
        {
            return Redirect::to('tasks/' . $id)
                    ->withErrors($validator);
        }

        $test = Test::find($id);
        $user = Auth::user();
        $isSolved = 0;

        if(!$test || !$user)
            return redirect()->route('tests.index');

        $answer = $request->get('answer');
        $rightAnswer = json_decode($test['answer']);
        // dd($rightAnswer->id);
        if($rightAnswer->id == $answer)
        {
           $isSolved = 1; 
        }

        UserTest::create([
            'user_id' => $user['id'],
            'test_id' => $test['id'],
            'is_solved' => $isSolved
        ]);


        if($rightAnswer->id != $answer){
            return view('tests.show')->with([
                'error' => 'Wrong flag',
                'test' => $test
                ]);
        }
        return redirect()->route('tests.index');

        


    }
}
