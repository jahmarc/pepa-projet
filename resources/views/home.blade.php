@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br/>
                        <div class="links">
                            <a href="{{ route('questions.index') }}">Commencer le test</a>
                        </div>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <div class="card card-default">
                <div class="card-header">Table des matières</div>

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
