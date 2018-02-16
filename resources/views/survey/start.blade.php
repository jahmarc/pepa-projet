<!doctype html>
<head>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body style="background-color: #9e9e9e12">

<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br/>
                <br/>
                <br/>
                <div class="card card-default ">
                    <div class="card-header" style="font-size: 30px; background-color: #9fcdff; font-weight: bold;" >Summary Table</div>
                    <div class="card">

                        <table style="font-size: 15px; text-align: justify-all;" class="table-striped table" >
                            @foreach($questions as $question)

                                @if($question->section_header!='')
                                    <tr><td><a href="./category1"><?=
                                     $question->section_header;
                                    ?></a></td></tr>

                                @endif
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>













