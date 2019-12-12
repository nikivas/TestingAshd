@extends('layouts.app')

@section('content')
<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            @if($ball < 210)
                <div class="card-header" style="text-align: center;">Задания</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ((count($tests)!=0) || 1==1)
                    <div class="task-container">
                        @foreach($tests as $test)
                            @if ($test['isSolved'] === 1)
                                <div class="card border-success" style="width: 20rem;  height: 13rem; margin: 10px;">
                            @elseif ($test['isSolved'] === 0) 
                                <div class="card border-fail" style="width: 20rem; height: 13rem; margin: 10px;">
                            @else
                                <div class="card" style="width: 20rem; height: 13rem; margin: 10px;">
                            @endif
                            
                                <div class="card-body" >
                                    <h5 class="card-title">{{ $test['name'] }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $test['ball'] }}</h6>
                                    <p class="card-text">{{ mb_strcut($test['description'], 0, 100)."..." }}</p>
                                    

                                    @if ($test['isSolved'] === null)
                                        <a href="{{ route('tests.show', $test['id']) }}" class="card-link btn btn-primary">Ссылка на страницу задания</a>    
                                    @elseif($test['isSolved'] === 1)
                                        <div class="check_container">
                                            <div class="check_text" style="padding: 1px;">
                                                <span>Вы уже решили это задание!</span>
                                                <img src="checked.svg" style="width: 10%; margin-left: 15px">
                                            </div>
                                        </div>
                                    @else
                                        <div class="check_container">
                                            <div class="check_text" style="padding: 1px;">
                                                <span>Вы уже решили это задание!</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>  
                    @else 
                    <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px;">
                        <div class="container">
                            <h1 class="display-4"> Привет, {{ Auth::user()->name }}</h1>
                            <p class="lead">Задания пока не выложили. Подожди немного и всё будет готово.</p>
                        </div>
                    </div>
                    @endif
                </div>
            @else 
            <div class="card-header" style="text-align: center;">Поздравляю!</div>
                <div class="card-body">1980</div>
            @endif
        </div>
        
    </div>
</div>
@endsection
