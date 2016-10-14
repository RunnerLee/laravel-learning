@extends('layouts.app')
@section('title', 'cute')
@section('content')

    <div class="container articles-index">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <h1>Articles</h1>

                <hr>
            @foreach($articles as $article)

                <article>
                    <h4><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h4>
                    <ul>
                        <li>author: <a href="{{ route('users.show', $article->user->id) }}">{{ $article->user->name }}</a></li>
                        <li>write at: {{ $article->created_at }}</li>
                        <li>category: <a href="{{ route('categories.index', $article->category->id) }}">{{ $article->category->name }}</a></li>
                    </ul>
                    <a href="{{ route('articles.show', $article->id) }}">
                    <div class="short-content">
                        <p>{{ $article->short_content }}</p>
                    </div>
                    </a>
                </article>

            @endforeach

            </div>


        </div>


    </div>


@stop