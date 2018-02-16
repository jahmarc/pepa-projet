<!doctype html>
<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
use App\ImportSurvey;
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
                        <br/>
                        <table class="table">
                            @foreach($questions as $question)

                                @if($question->section_header!='')
                                    <tr><td><?=
                                    print_r(substr(($question->section_header),0,-1));
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














