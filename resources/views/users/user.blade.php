@extends('layouts.app')
@section('title', $user->name)
@section('content')
    <div class="container">
        <div class="row user-show">
            <div class="col-md-1">
                <h4>{{ $user->name }}</h4>
                <hr>
                <ul>
                    <li><a href="{{ route('users.articles', $user->id) }}">Articles</a></li>
                    <li><a href="{{ route('users.comments', $user->id) }}">Comments</a></li>
                    <li><a href="{{ route('users.favorites', $user->id) }}">Favorites</a></li>
                    <li><a href="{{ route('users.categories', $user->id) }}">Categories</a></li>
                    @if($user->id == Auth::id())
                    <li><a href="{{ route('users.edit', $user->id) }}">Profiles</a></li>
                    @endif
                </ul>
            </div>
            <div class="col-md-10 col-md-offset-1">
                @yield('container')
            </div>
        </div>
    </div>
@stop