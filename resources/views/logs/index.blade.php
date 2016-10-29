@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">


            <div class="col-md-12">

                <table>
                    @foreach($revisions as $revision)
                        <tr>
                            <td>{{ $revision->revisionable_type }}</td>
                            <td>{{ $revision->revisionable_id }}</td>
                            <td>{{ $revision->type }}</td>
                            <td>{{ $revision->user->name }}</td>
                            <td>{{ $revision->field }}</td>
                            <td>{{ $revision->old_value }}</td>
                            <td>{{ $revision->new_value }}</td>
                            <td>{{ $revision->created_at }}</td>
                        </tr>
                    @endforeach
                </table>

            </div>


        </div>
    </div>

@stop