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
                {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($article->original_content) !!}
            </div>
        </div>

        <div class="row" style="margin-top: 40px;">
            <div class="col-md-8">
                <hr>
            </div>
            <div class="col-md-8">
                <h3>Comments</h3>
            </div>
            <div class="col-md-8">
            @foreach($article->comments as $comment)
                <blockquote>
                    {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($comment->original_content) !!}
                </blockquote>
            @endforeach
            </div>

            @if(Auth::check())
            <div class="col-md-8" style="margin-top: 30px;">
                <form id="comment-form">
                    <div class="form-group">
                        <textarea class="form-control" style="height: 100px;" placeholder="请输入回复内容，支持 Markdown"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            @endif
        </div>


    </div>


@stop