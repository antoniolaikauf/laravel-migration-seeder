@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<div class="container">
    <div class="row">

        <ul class="list-group">
            @foreach($train as $trainiesimo)
            <li class="list-group-item">{{$trainiesimo -> stazione_di_partenza}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection