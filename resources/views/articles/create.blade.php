@extends('layouts.app')
@section('title', 'create an article')
@section('content')

    <div class="container">

        <form method="POST" action="{{ route('articles.store') }}">
            {!! csrf_field() !!}
            <div class="row">

                <div class="col-md-12 form-group" style="margin-bottom: 20px;">
                    <select class="form-control" name="category_id">
                        <option disabled selected>选择分类</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="title" id="article-title" placeholder="article title" />
                </div>


                <div class="col-md-12 form-group" style="height: 480px; margin: 20px 0;">

                    <div id="article-editormd-container">
                        <textarea style="display:none;" name="original_content" id="article-original-content">### Hello Editor.md !</textarea>
                    </div>

                </div>



                <div class="col-md-12">
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>

            </div>
        </form>

    </div>

@stop