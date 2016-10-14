@extends('layouts.app')
@section('title', $article->title . ' - article')
@section('content')

    <div class="container">


        <div class="row">
            <div class="col-md-6"><h1>{{ $article->title }}</h1></div>
            <div class="col-md-3 col-md-offset-1">
                <ul class="title-toolbar">
                    <li>收藏</li>
                </ul>
            </div>
            <hr>
            <div class="col-md-10">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                {{ $article->original_content }}
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Comments</h2>
            </div>
            <div class="col-md-8">
                <hr>
            </div>
            <div class="col-md-8">

                @foreach($article->comments as $comment)
                    <blockquote>
                        <div>{{ $comment->original_content }}</div>
                    </blockquote>
                @endforeach

            </div>
        </div>


    </div>


@stop