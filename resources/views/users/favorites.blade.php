@extends('users.user')
@section('title', 'favorites - ' . $user->name)
@section('container')

    <div class="row">
        <h4>Favorites</h4>
        <hr>

        <ul>
            @forelse($articles as $article)
                <li><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></li>
            @empty
                <li>nothing..</li>
            @endforelse
        </ul>

    </div>



@stop