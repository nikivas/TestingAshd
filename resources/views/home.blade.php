@extends('layouts.app')

@section('content')
<div class="container">
    <div style="display:none;">
        <input id="ids" type="text" value="{{$slovedId}}">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Введите ответы:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row flag-container" >
                            <div class="col-3">
                                <p>Введите флаг из теста:</p>
                                <div style="display:inline-block" class="word1">
                                    <input class="flag-input" type="text" id="i11" maxlength="1">
                                    <input class="flag-input" type="text" id="i12" maxlength="1">
                                    <input class="flag-input" type="text" id="i13" maxlength="1">
                                    <input class="flag-input" type="text" id="i14" maxlength="1">               
                                </div>
                            </div>
                            <div class="col-4">
                                    <p>Введите флаг из теста:</p>
                                <div style="display:inline-block" class="word2">                                     
                                    <input class="flag-input" type="text" id="i21" maxlength="1">
                                    <input class="flag-input" type="text" id="i22" maxlength="1">
                                    <input class="flag-input" type="text" id="i23" maxlength="1">
                                    <input class="flag-input" type="text" id="i24" maxlength="1">
                                    <input class="flag-input" type="text" id="i25" maxlength="1">
                                    <input class="flag-input" type="text" id="i26" maxlength="1">
                                    <input class="flag-input" type="text" id="i27" maxlength="1">      
                                </div>
                                <div class="col">&nbsp</div>
                                <button id="send-flag" type="button" class="btn btn-success btn-lg" >Проверить</button>
                            </div>
                            <div class="col-4 offset-1">
                                    <p>Введите флаг из теста:</p>
                                <div style="display:inline-block" class="word3">
                                    <input class="flag-input" type="text" id="i31" maxlength="1">
                                    <input class="flag-input" type="text" id="i32" maxlength="1">
                                    <input class="flag-input" type="text" id="i33" maxlength="1">
                                    <input class="flag-input" type="text" id="i34" maxlength="1">
                                    <input class="flag-input" type="text" id="i35" maxlength="1">
                                    <input class="flag-input" type="text" id="i36" maxlength="1">
                                    <input class="flag-input" type="text" id="i37" maxlength="1">
                                </div>       
                            </div>
                        </div>
                            
                            
                                    
                            
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
