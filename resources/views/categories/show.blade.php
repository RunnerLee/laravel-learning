@extends('layouts.app')
@section('title', $category->name . ' - Categories')
@section('content')

    <div class="container">

        <div class="row articles-index">

            <div class="col-md-12">

                <h1>{{ $category->name }}</h1>

                <ul class="toolbar">
                    <li><a href="{{ route('categories.edit', $category->id) }}">修改</a></li>
                    <li><a href="javascript:void(0)" data-ajax="DELETE" data-url="{{ route('categories.destroy', $category->id) }}" data-redirect="{{ route('articles.index') }}">删除</a></li>
                </ul>

                <hr>
                @foreach($articles as $article)

                    <article>
                        <h4><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h4>
                        <ul>
                            <li><a href="{{ route('users.show', $article->user->id) }}"><i class="fa fa-user"></i>{{ $article->user->name }}</a></li>
                            <li><i class="fa fa-clock-o"></i>{{ $article->created_at->format('M d, Y') }}</li>
                        </ul>
                        <div class="short-content">
                            <a href="{{ route('articles.show', $article->id) }}">
                                <p>{{ $article->short_content }}</p>
                            </a>
                        </div>
                    </article>

                @endforeach

                <div>{{ $articles->links() }}</div>

            </div>


        </div>


    </div>


@stop