@extends('layout.app');
@section('content')

<h1>Hello : {{Auth::user()->fname}} {{Auth::user()->lname}}</h1>

@endsection
