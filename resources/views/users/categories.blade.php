@extends('users.user')
@section('title', 'categories - ' . $user->name)
@section('container')
    <div class="row">
        <h4>Categories</h4>
        <hr>

        <ul>
            @forelse($categories as $category)
                <li>
                    <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                </li>
            @empty
                <li>nothing..</li>
            @endforelse
        </ul>

    </div>
@stop