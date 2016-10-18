@extends('layouts.app')
@section('title', $article->title . ' - article')
@section('content')

    <div class="container">


        <div class="row articles-show">
            <div class="col-md-12"><h1>{{ $article->title }}</h1></div>
            <div class="col-md-12">
                <ul>
                    @can('update', $article)
                    <li><a href="{{ route('articles.edit', $article->id) }}">编辑</a></li>
                    <li><a href="{{ route('articles.delete', $article->id) }}">删除</a></li>
                    @else
                    <li><a data-ajax="post" data-url="{{ route('articles.upfavorite', $article->id) }}" href="javascript:void(0)">收藏</a></li>
                    @endcan
                </ul>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($article->original_content) !!}
            </div>
        </div>

        <div class="row" style="margin-top: 40px;">
            <div class="col-md-12">
                <h2>Comments</h2>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-8">
            @foreach($article->comments as $comment)
                <div>
                    <div><a href="{{ route('users.show', $comment->user->id) }}">{{ $comment->user->name }}</a>&nbsp;&nbsp;{{ $comment->created_at->format('M d, Y  H:i') }}</div>
                    <div>
                        {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($comment->original_content) !!}
                    </div>
                    <hr>
                </div>
            @endforeach
            </div>

            @if(Auth::check())
            <div class="col-md-8" style="margin-top: 30px;">
                <form id="comment-form" method="POST" action="{{ route('articles.comment', $article->id) }}">
                    <div class="form-group">
                        <textarea class="form-control" style="height: 100px;" placeholder="请输入回复内容，支持 Markdown" name="original_content"></textarea>
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