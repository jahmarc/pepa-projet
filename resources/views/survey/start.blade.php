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


                    @foreach($questions as $question){
                <?=
                    print_r($question->section_header);
                    ?>
                    }
                    @endforeach

                    <div class="card-body">
                        <br/>
                        <table class="table">
                            <tr>
                                <th>Chapitre</th>
                                <th>Etat</th>
                            </tr>
                            <tr>
                                <td>Les problèmes d'argent</td>
                                <td>Pas OK</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection














