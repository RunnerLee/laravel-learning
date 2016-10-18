@extends('users.user')
@section('title', 'comments - ' . $user->name)
@section('container')

    <div class="row">
        <h4>Comments</h4>
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

        <div>{{ $comments->links() }}</div>

    </div>



@stop