@extends('layout')

@section('title')
    A Propos De Nous
@endsection
@section('page')
    @include('partials.pages-header', [
        'title' => 'A Propos De Nous',
        'subtitle' => 'Qui nous sommes',
    ])
 @include('partials.about')

@endsection