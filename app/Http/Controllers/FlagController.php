<?php

namespace App\Http\Controllers;
use \App\Flag;
use App\UserFlag;
use Collator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlagController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function check(Request $request){
        $answer = json_decode($request->get('answer'));
        if(is_null($answer)){
            return [
                'code' => '400',
                'error' => 'wrong answer'
            ];
        }

        $user = Auth::user();

        $flags = Flag::all();
        // dd($flags);
        $flagsText = [];
        foreach ($flags as $el ) {
            $flagsText[$el['id']] = $el['text']; 
        }
        // dd($flagsText);
        $i = 0;
        $rightAnswers = [];
        foreach ($answer as $el) {
            $str1 = strtolower(iconv('UTF-8','CP1251',$el->text));
            $str2 = strtolower(iconv('UTF-8','CP1251',$flagsText[$el->id]));
            if($i++ > 0)
                dd([$str1,$str2]);
            if ( strcmp($str1, $str2) == 0 || strcmp($str1, $flagsText[$el->id]) == 0 )
            {
                $rightAnswers[] = $el;
                if(count(UserFlag::where('user_id', '=', $user['id'])->where('flag_id','=',$el->id)->get()) == 0)
                {
                    UserFlag::create([
                        'user_id' => $user['id'],
                        'flag_id' => $el->id 
                    ]);
                }
            }
        }

        return [
            'code' => '',
            'right' => $rightAnswers
        ];

    }
}
