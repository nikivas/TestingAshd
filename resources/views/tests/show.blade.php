@extends('layouts.app')
@section('content')
<div style="display:none;">
<input id="testType" type="text" value="{{$test['type']}}">
</div>
<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="jumbotron" style="margin: 0px;">
                    <h1 class="display-4">{{ $test['name'] }}</h1>
                    <h1 class="display-6">{{ $test['ball'] }}</h1>
                    <hr class="my-4">
                    <p>{{ $test['description'] }} </p>
                    @if ($test['type'] == 'one')
                        @foreach (json_decode($test['variables']) as $el)
                            <div class="form-check">
                                <label class="form-check-label">
                                <input id="answer{{$el->id}}" type="radio" class="form-check-input" name="answer" value="{{$el->id}}">{{$el->text}}
                                </label>
                            </div>
                        @endforeach
                    @elseif ($test['type'] == 'multy')
                        @foreach (json_decode($test['variables']) as $el)
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="answer{{$el->id}}" type="checkbox" class="form-check-input" name="answer" value="{{$el->id}}">{{$el->text}}
                                </label>
                            </div>
                        @endforeach
                    @elseif ($test['type'] == 'collocation')
                        <div class="row">
                            @foreach (json_decode($test['variables']) as $col)
                            <div class="col">
                                @foreach ($col as $row)
                                    <div class="row">
                                        {{$row->text}}
                                    </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    @endif
                    <form method="POST">
                        <div class="form-group row">

                            <!-- <label for="flag" class="col-md-1 col-form-label text-md-center ">Flag</label> -->
                            <div class="col-md-5">
                                @csrf
                                <!-- <label for="flag" class="col-md-1 col-form-label text-md-center ">Flag</label> -->
                            <input style="display:none;" type="text" class="form-control {{ $errors->has('answer') ? ' is-invalid' : '' }}{{@$error == 'Wrong flag' ? 'is-invalid':''}}" id="flag" placeholder="Флаг" name="answer">
                                
                                @if ($errors->has('answer'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('answer') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <button type="submit" onclick="$('#flag').val(testsRoute());" class="btn btn-primary">Ответить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 