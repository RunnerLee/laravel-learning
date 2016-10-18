@extends('layouts.app')
@section('title', 'Notifications')
@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Notifications</h1>
                <hr>
                @foreach($notifications as $notification)
                    <div>
                        <p>
                            <b><a href="{{ route('users.show', $notification->fromUser->id) }}">{{ $notification->fromUser->name }}</a></b>
                            has {{ $notification->operate() }} your article
                            <a href="{{ route('articles.show', $notification->article_id) }}#comment-{{ $notification->comment_id }}">{{ $notification->article->title }}</a>
                        </p>
                    </div>

                    <hr>

                @endforeach
            </div>

        </div>

    </div>

@stop