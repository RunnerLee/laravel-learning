@extends('layouts.app')
@section('title', $article->title . ' - Articles')
@section('content')

    <div class="container">


        <div class="row articles-show">
            <div class="col-md-12">
                <h1>{{ $article->title }}</h1>
                <ul class="toolbar">
                    @can('update', $article)
                    <li><a href="{{ route('articles.edit', $article->id) }}">编辑</a></li>
                    <li><a href="javascript:void(0)" data-ajax="DELETE" data-url="{{ route('articles.destroy', $article->id) }}" data-redirect="{{ route('articles.index') }}">删除</a></li>
                    @else
                        @if($isCollected)
                            <li><a data-ajax="post" data-url="{{ route('articles.downfavorite', $article->id) }}" href="javascript:void(0)">取消收藏</a></li>
                        @else
                            <li><a data-ajax="post" data-url="{{ route('articles.upfavorite', $article->id) }}" href="javascript:void(0)">收藏</a></li>
                        @endif
                    @endcan
                </ul>

                <hr>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {!! convert_markdown_to_html($article->original_content) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Comments</h2>
                <hr>
            </div>
            <div class="col-md-8">
            @foreach($article->comments as $comment)
                @if($comment->trashed())
                <a name="comment-{{ $comment->id }}"></a>
                <div>
                    <samp>deleted</samp>
                </div>
                @else
                <a name="comment-{{ $comment->id }}"></a>
                <div>
                    <div><a href="{{ route('users.show', $comment->user->id) }}">{{ $comment->user->name }}</a>&nbsp;&nbsp;{{ $comment->created_at->format('M d, Y  H:i') }}</div>
                    <div>
                        {!! $comment->compiled_content !!}
                    </div>
                </div>
                @endif
                <hr>
            @endforeach
            </div>

            <div class="col-md-8">
                @if(Auth::check())
                <form id="comment-form" method="POST" action="{{ route('articles.comment', $article->id) }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control" style="height: 100px;" placeholder="请输入回复内容，支持 Markdown" name="original_content"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" class="btn btn-primary">
                    </div>
                </form>
                @else
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" style="height: 100px;" disabled>can not comment when not logged in</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="submit" class="btn btn-primary" disabled>
                        </div>
                    </form>
                @endif
            </div>
        </div>


    </div>


@stop