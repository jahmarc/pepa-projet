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
            <div class="col-md-8">
                <br/>
                <br/>
                <br/>
                <div class="card card-default">
                    <div class="card-header">Table des matières</div>
                    <div class="card-body">
                        <table class="table">
                            @foreach($categories as $category)


                                <tr><td><a href="./category/<?=$i?>"><?=
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
@endsection
