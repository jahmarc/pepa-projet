<!doctype html>
<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
<?php
$i=1;
$x=1;
?>
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-auto">
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
                                        <div class="col-lg-offset-9">
                                            {!! Form::label('question', $question->field_label, ['class' => '']) !!}
                                        </div>
                                    </div>

                                    <!-- Radio Buttons -->
                                    <div class="form-group">
                                        <div class="col-lg-auto">
                                            <div class="radio" style="float:left; width: 12.5%; text-align: center; ">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio1', 'Pas du tout') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;text-align: center;">
                                                {!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!}
                                                </div>
                                            </div>
                                            <div class="radio" style="float:left; clear: top; width: 12.5%;text-align: center;">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio2', '1') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;text-align: center;">
                                                {!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!}
                                                </div>
                                            </div>
                                            <div class="radio" style="float:left; clear: top; width: 12.5%;text-align: center;">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio3', 'Un peu') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;text-align: center;">
                                                {!! Form::radio('radio', 'option3', false, ['id' => 'radio3']) !!}
                                                </div>
                                            </div>
                                            <div class="radio" style="float:left; clear: top; width: 12.5%;text-align: center;">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio4', '3') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;text-align: center;">
                                                {!! Form::radio('radio', 'option4', false, ['id' => 'radio4']) !!}
                                                </div>
                                            </div>
                                            <div class="radio" style="float:left; clear: top; width: 12.5%;text-align: center;">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio5', 'Assez') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;text-align: center;">
                                                {!! Form::radio('radio', 'option5', false, ['id' => 'radio5']) !!}
                                                </div>
                                            </div>
                                            <div class="radio" style="float:left; clear: top; width: 12.5%;text-align: center;">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio6', '5') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;text-align: center;">
                                                {!! Form::radio('radio', 'option5', false, ['id' => 'radio5']) !!}
                                                </div>
                                            </div>
                                            <div class="radio" style="float:left; clear: top; width: 12.5%;text-align: center;">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio7', 'Tout à fait') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;text-align: center;">
                                                {!! Form::radio('radio', 'option7', false, ['id' => 'radio7']) !!}
                                                </div>
                                            </div>
                                            <div class="radio" style="float:left; clear: top; width: 12.5%; min-width:100px;text-align: center;">
                                                <div class="radio" style="float: top; align-text:center;" >
                                                {!! Form::label('radio8', 'Pas concerné') !!}
                                                </div>
                                                <div class="radio" style="float: top; width: 50%; margin: 0 auto;">
                                                {!! Form::radio('radio', 'option8', false, ['id' => 'radio8']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                        @endforeach

                            <!-- Submit Button -->
                            <div class="form-group" style="clear: left">
                                <div class="col-lg-10 col-lg-offset-2">
                                    {!! Form::submit('Envoyer tout', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                                </div>
                            </div>

                        </fieldset>

                        {!! Form::close()  !!}
                        <div class="card card-default">
                            <div class="card-header">Table des matières</div>
                            <div class="card-body">
                                <table class="table">
                                    @foreach($categories as $category)


                                        <tr><td><a href="../category/<?=$i?>"><?=
                                                    $category;
                                                    ?></a></td></tr>
                                        <?php $i++;?>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
