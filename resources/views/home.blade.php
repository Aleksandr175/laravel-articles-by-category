@extends('layouts.app')

@section('content')
    <h1 class="h1">Статьи</h1>

        <div class="categories">
            <ul class="categories-list">
                <li>
                    <a href="#" class="active">Последние</a>
                </li>
                @if ($categories)
                    @foreach ($categories as $category)
                        <li>
                            <a href="#">{{ $category->title }} <sup>{{ $category->count }}</sup></a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>

    <div class="row articles">
        @foreach ($articles as $article)
            <div class="col-4">
                <div class="card">
                    <a href="{{ route('article.show', $article->slug) }}" class="preview" style="background-image: url({{ asset('img/' . $article->preview) }})"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <div class="card-info">
                            <span>
                                <i class="far fa-calendar"></i>
                                <span>{{ $article->date }}</span>
                            </span>
                            <span>
                                <i class="far fa-eye"></i>
                                <span>{{ $article->views }}</span>
                            </span>
                        </div>
                        <p class="card-text">{{ $article->description }}</p>
                        <a href="{{ route('article.show', $article->slug) }}">Читать далее</a><br>

                        @can('update', $article)
                            <a class="btn btn-warning" href="{{ route('article.edit', $article->id) }}">Редактировать</a>
                        @endcan
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <nav>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Назад</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Вперед</a></li>
        </ul>
    </nav>
@endsection
