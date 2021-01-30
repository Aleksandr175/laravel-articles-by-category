@extends('layouts.app')

@section('content')
    <h1 class="h1">Edit article: {{ $article->title }}</h1>
    <div>
        {{ $article->text }}
    </div>
    <button class="btn btn-primary">Обновить</button>
@endsection
