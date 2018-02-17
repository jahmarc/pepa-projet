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
        </div>
    </div>
</div>
@endsection
