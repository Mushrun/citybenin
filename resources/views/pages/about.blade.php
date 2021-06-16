@extends('base')

@section('title', 'About-us | ' . config('app.name'))

@section('content')
        <img src="/img/mushrun2.jfif" alt="Mushrun Image">
        <p> Built with &hearts; by Novotech</p>

        <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>

        
@endsection