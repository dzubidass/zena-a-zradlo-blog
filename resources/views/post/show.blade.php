@extends('layouts.master')
@section('title', 'show-post')

@section('content')


@foreach($post as $atribute)
<h1>{{ $atribute->title }}</h1>
<p>{{ $atribute->text }}</p>
@endforeach

@dump($post)
@endsection
