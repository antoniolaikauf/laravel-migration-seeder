@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<div class="container">
    <div class="row">

        <ul class="list-group">
            @foreach($train as $trainiesimo)
            <li class="list-group-item">
                <div>
                    stazione di partenza : {{$trainiesimo -> stazione_di_partenza}}
                </div>
                <div>
                    orario di partenza : {{$trainiesimo -> orario_di_partenza}}
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection