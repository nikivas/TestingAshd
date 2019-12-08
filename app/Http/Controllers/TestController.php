<?php

namespace App\Http\Controllers;

use App\Test;
use App\UserTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        foreach ($solvedTests as $el) {
            $solvedTestsDictionary[$el['id']] = $el['is_solved']; 
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
}
