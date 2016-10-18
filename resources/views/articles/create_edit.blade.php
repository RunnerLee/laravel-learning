@extends('layouts.app')
@section('title', 'create an article')
@section('content')

    <div class="container">

        @if(isset($article))
        <form method="POST" action="{{ route('articles.update', $article->id) }}">
            <input type="hidden" name="_method" value="PATCH">
        @else
        <form method="POST" action="{{ route('articles.store') }}">
        @endif
            {!! csrf_field() !!}
            <div class="row">

                <div class="col-md-12 form-group" style="margin-bottom: 20px;">
                    <select class="form-control" name="category_id">
                        <option disabled selected>选择分类</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if(isset($article) && $article->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                @if(isset($article))
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="title" id="article-title" placeholder="article title" value="{{ $article->title }}" />
                </div>
                @else
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="title" id="article-title" placeholder="article title" />
                </div>
                @endif


                <div class="col-md-12 form-group" style="height: 480px; margin: 20px 0;">

                    <div id="article-editormd-container">
                        <textarea style="display:none;" name="original_content" id="article-original-content">{{ isset($article) ? $article->original_content : '' }}</textarea>
                    </div>

                </div>



                <div class="col-md-12">
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>

            </div>
        </form>

    </div>

@stop