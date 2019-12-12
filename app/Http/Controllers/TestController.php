<?php

namespace App\Http\Controllers;

use App\Test;
use App\UserTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

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
        
        $ballQuery = DB::table('users_tests')
                        ->select(DB::raw('sum('.Test::getTableName().'.ball) as ball'))
                        ->join(Test::getTableName(),'users_tests.test_id', '=', Test::getTableName().'.id')
                        ->where('user_id', '=', $user['id'])
                        ->where('is_solved','=',1)
                        ->groupBy('user_id')
                        ->get();
        // dd($ballQuery);
        $ball = 0;
        if (count($ballQuery) != 0) {
            $ball = intval($ballQuery[0]->ball);
        }
        // dd($ball);
        foreach ($solvedTests as $el) {
            if (isset($solvedTestsDictionary[$el['test_id']]))
                $solvedTestsDictionary[$el['test_id']] = max($solvedTestsDictionary[$el['test_id']], $el['is_solved']);
            else
                $solvedTestsDictionary[$el['test_id']] = $el['is_solved'];
        }

        foreach ($tests as $el) {
            $el['isSolved'] = $solvedTestsDictionary[$el['id']] ?? null;
        }

        return view('tests/index')
                ->with('tests', $tests)
                ->with('ball',$ball);
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
        if (count($solvedTests) != 0 || $test == null) {
            return redirect()->route('tests.index');
        }

        if ( $test['type'] == 'collocation') {
            $firstIds = [];
            foreach($tests['variables'][0] as $el){
                $firstIds[] = $el['id'];
            }
            return view('tests/index')
                ->with('tests', $tests)
                ->with('ball',$ball)
                ->with('firstIds', json_encode($firstIds));

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

    /**
     * @param  \Illuminate\Http\Request  $request
     * $request => [ {"id" : 123}, {"id": 321}, ...]
     * @return \Illuminate\Http\Response 
     */
    public function check(Request $request, $id)
    {  
        $rules = ['answer' => 'required|string|min:1'];
        $validator = Validator::make($request->all(), $rules);

        $tryesCount = count(UserTest::where('user_id','=',Auth::user()['id'])->where('test_id','=',$id)->get());

        if ($validator->fails() || $tryesCount > 0) {
            return redirect()->route('tests.index');
        }

        $test = Test::find($id);
        $user = Auth::user();
        $isSolved = 0;

        if (!$test || !$user)
            return redirect()->route('tests.index');

        $answer = json_decode($request->get('answer'));
        $rightAnswer = json_decode($test['answer']);

        //sorting by keys
        foreach ([&$answer, &$rightAnswer] as &$el) {
            usort($el, function ($a, $b) {
                return strcmp(strval($a->id), strval($b->id));
            });
        }
        unset($el);

        $rightAnswer = json_encode($rightAnswer);
        $answer = json_encode($answer);

        // dd($answer);
        // dd($rightAnswer);

        if (strcmp($rightAnswer, $answer) == 0) {
            $isSolved = 1;
        }

        UserTest::create([
            'user_id' => $user['id'],
            'test_id' => $test['id'],
            'is_solved' => $isSolved
        ]);

        return redirect()->route('tests.index');
    }

    public function checkCollocation(Request $request, $id)
    {  
        $rules = ['answer' => 'required|string|min:1'];
        $validator = Validator::make($request->all(), $rules);

        $tryesCount = count(UserTest::where('user_id','=',Auth::user()['id'])->where('test_id','=',$id)->get());

        if ($validator->fails() || $tryesCount > 0) {
            return redirect()->route('tests.index');
        }

        $test = Test::find($id);
        $user = Auth::user();
        $isSolved = 0;

        if (!$test || !$user)
            return redirect()->route('tests.index');

        $answer = json_decode($request->get('answer'));
        $rightAnswer = json_decode($test['answer']);

        //sorting by keys
        foreach ([&$answer, &$rightAnswer] as &$el) {
            usort($el, function ($a, $b) {
                return strcmp(strval($a->id1), strval($b->id1));
            });
        }
        unset($el);

        $rightAnswer = json_encode($rightAnswer);
        $answer = json_encode($answer);

        // dd($answer);
        // dd($rightAnswer);

        if (strcmp($rightAnswer, $answer) == 0) {
            $isSolved = 1;
        }

        UserTest::create([
            'user_id' => $user['id'],
            'test_id' => $test['id'],
            'is_solved' => $isSolved
        ]);

        return redirect()->route('tests.index');
    }
}
