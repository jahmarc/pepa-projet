<!doctype html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br/>
                <br/>
                <br/>
                <div class="card card-default">

    <div class="well">

        {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

        <fieldset>

            <legend>Questionnaire PEPA</legend>

        @foreach($questions as $question)
            @if($question->matrix_group_name == 'categorie'.$id)

            <!-- Text Area -->
            <div class="form-group">
                <div class="col-lg-10">
                    {!! Form::label('question', $question->field_label, ['class' => 'col-lg-2 control-label']) !!}
                </div>
            </div>

            <!-- Radio Buttons -->
            <div class="form-group">
                <div class="col-lg-10">
                    <div class="radio">
                        {!! Form::label('radio1', 'Pas du tout') !!}
                        {!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!}

                    </div>
                    <div class="radio">
                        {!! Form::label('radio2', '1') !!}
                        {!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!}
                    </div>
                    <div class="radio">
                        {!! Form::label('radio3', 'Un peu') !!}
                        {!! Form::radio('radio', 'option3', false, ['id' => 'radio3']) !!}
                    </div>
                    <div class="radio">
                        {!! Form::label('radio4', '3') !!}
                        {!! Form::radio('radio', 'option4', false, ['id' => 'radio4']) !!}
                    </div>
                    <div class="radio">
                        {!! Form::label('radio5', 'Assez') !!}
                        {!! Form::radio('radio', 'option5', false, ['id' => 'radio5']) !!}
                    </div>
                    <div class="radio">
                        {!! Form::label('radio6', '5') !!}
                        {!! Form::radio('radio', 'option5', false, ['id' => 'radio5']) !!}
                    </div>
                    <div class="radio">
                        {!! Form::label('radio7', 'Tout à fait') !!}
                        {!! Form::radio('radio', 'option7', false, ['id' => 'radio7']) !!}
                    </div>
                    <div class="radio">
                        {!! Form::label('radio8', 'Ne s\'applique pas') !!}
                        {!! Form::radio('radio', 'option8', false, ['id' => 'radio8']) !!}
                    </div>
                </div>
            </div>
@endif
        @endforeach
            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                </div>
            </div>

        </fieldset>

        {!! Form::close()  !!}

    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
