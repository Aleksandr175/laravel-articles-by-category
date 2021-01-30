@extends('layouts.app')

@section('content')
    <h1 class="h1">{{ $article->title }}</h1>
    <div>
        {{ $article->text }}
    </div>
@endsection
