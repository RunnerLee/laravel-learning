@extends('layouts.app')
@section('title', 'create a category')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create a category</div>

                <div class="panel-body">

                    <form method="POST" action="{{ route('categories.store') }}" class="form-horizontal">

                        {!! csrf_field() !!}

                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            <label for="category-name" class="col-sm-2 control-label">name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="category-name" placeholder="category's name">
                            </div>
                        </div>
                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            <label for="category-title" class="col-sm-2 control-label">title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="category-title" placeholder="category's title">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input type="submit" class="btn btn-default btn-sm" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@stop