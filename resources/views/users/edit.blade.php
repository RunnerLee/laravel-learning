@extends('users.user')
@section('container')

    <form method="POST" action="{{ route('users.update', $user->id) }}" role="form">

        {!! csrf_field() !!}

        <input type="hidden" name="_method" value="PATCH">

        <div class="form-group">
            <label>email</label>
                <input type="text" class="form-control" name="email" disabled value="{{ $user->email }}" >
        </div>
        <div class="form-group">
            <label>name</label>
                <input type="text" class="form-control" name="name" placeholder="your name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>confirm password</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="submit">
        </div>
    </form>
@stop