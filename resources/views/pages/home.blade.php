@extends('base')

@section('title',  config('app.name'))
  
@section('content')
        <img src="{{ asset('/img/imagesbenin.png') }}" alt="Benin Flag">
        <h1> Hello from Benin</h1>

        <p> It's currently {{ date('h:i A') }} </p>
@endsection