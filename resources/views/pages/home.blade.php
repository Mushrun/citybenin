@extends('base')

@section('title',  config('app.name'))
  
@section('content')
        <img src="{{ asset('/img/imagesbenin.png') }}" alt="Benin Flag" class="mt-12 rounded shadow-md h-32">
        <h1 class="mt-5 mb-5 text-5xl text-indigo-800"> Hello from Benin</h1>

        <p class="text-lg text-gray-800"> It's currently {{ date('h:i A') }} </p>
@endsection