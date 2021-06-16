@extends('base')

@section('title', 'About-us | ' . config('app.name'))

@section('content')
        <img src="{{ asset('/img/mushrun2.jfif')  }}" alt="Mushrun Image" class="mt-12  mb-5 rounded shadow-md h-40">
        <h2 class=" mb-5 text-gray-700"> Built with <span class="text-pink-500">&hearts; </span> by Novotech</h2>

        <p><a href="{{ route('home') }}"  class="text-indigo-500 hover:text-indigo-600">Revenir à la page d'accueil</a></p>

        
@endsection