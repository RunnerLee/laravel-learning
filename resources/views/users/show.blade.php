@extends('users.user')
@section('container')
    <div class="row">

        <div class="col-md-12">
            <h4>Latest Articles</h4>
            <hr>
            <ul>
                @forelse($articles as $article)
                    <li><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></li>
                @empty
                    <li>nothing..</li>
                @endforelse
            </ul>
        </div>

        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-12">
            <h4>Latest Comments</h4>
            <hr>
            <ul>
                @forelse($comments as $comment)
                    <li>
                        <a href="{{ route('articles.show', $comment->article->id) }}">{{ $comment->article->title }}</a>
                        <br>
                        <span>{{ $comment->short_content }}</span>
                    </li>
                @empty
                    <li>nothing..</li>
                @endforelse
            </ul>
        </div>
        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-12">
            <h4>Latest Favorites</h4>
            <hr>
            <ul>
                @forelse($favorites as $article)
                    <li><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></li>
                @empty
                    <li>nothing..</li>
                @endforelse
            </ul>
        </div>


    </div>
@stop