<!doctype html>
<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br/>
                <br/>
                <br/>
                <div class="card card-default">
                    <div class="card-header">Summary Table</div>
                    <div class="card-body">
                        <table class="table">
                            @foreach($questions as $question)

                                @if($question->matrix_group_name == 'categorie'.$id)
                                    <tr><td><?=
                                        $question->field_label;
                                        ?></tr></td>

                                @endif
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
