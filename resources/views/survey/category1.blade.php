<!doctype html>
<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@section('content')
<form class="form-horizontal col-md-12">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br/>
                <br/>
                <br/>
                <div class="card card-default">
                    <div class="card-header">Summary Table</div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-8" style=" font-family: Arial; letter-spacing: 2px ; font-size:16px;">
                            @foreach($questions as $question)

                                @if($question->matrix_group_name == 'categorie'.$id)
                                    <p><?=
                                        $question->field_label;
                                        ?></p>
                                    <div class="row" class="form-group" >
                                        <div class="col-md-offset-1" >


                                            <div class="col-md-1" style="text-align: center; "><input type="radio" class="form-control " name=<?php echo $question->field_name; ?>  value="0" id=<?php echo 'PasDuTout';?> >
                                                <label style=" font-family: Arial;" for=<?php echo 'PasDuTout';?>>Pas du tout</label></div>

                                            <div class="col-md-1 " style="text-align: center; "><input type="radio" class="form-control" name=<?php echo $question->field_name; ?>  value="1" id=<?php echo 'Un', 2;?> >
                                                <label style=" font-family: Arial;"  for=<?php echo 'Un', 2;?>>1</label></div>

                                            <div class="col-md-1" style="text-align: center; "><input type="radio" class="form-control" name=<?php echo $question->field_name; ?> value="2" id=<?php echo 'UnPeu';?>>
                                                <label style=" font-family: Arial;"  for=<?php echo 'UnPeu';?>>Un peu</label> </div>

                                            <div class="col-md-1" style="text-align: center; "><input type="radio" class="form-control" name=<?php echo $question->field_name; ?>  value="3" id=<?php echo 'Trois';?> >
                                                <label style=" font-family: Arial;" for=<?php echo 'Trois';?>>3</label></div>

                                            <div class="col-md-1" style="text-align: center;" ><input type="radio" class="form-control" name=<?php echo $question->field_name; ?> value="4" id=<?php echo 'Assez';?>>
                                                <label style=" font-family: Arial;" for=<?php echo 'Assez';?>>Assez</label> </div>

                                            <div class="col-md-1" style="text-align: center;" ><input type="radio" class="form-control" name=<?php echo $question->field_name; ?>  value="5" id=<?php echo 'Cinq';?> >
                                                <label style=" font-family: Arial;" for=<?php echo 'Cinq';?>>5</label></div>

                                            <div class="col-md-1" style="text-align: center; "><input type="radio" class="form-control" name=<?php echo $question->field_name; ?> value="6" id=<?php echo 'ToutAFait';?>>
                                                <label style=" font-family: Arial;" for=<?php echo 'ToutAFait';?>>Tout à fait</label></div>

                                            <div class="col-md-2" style="text-align: center; "><input type="radio" class="form-control" name=<?php echo $question->field_name; ?> value="7" id=<?php echo 'AppliquePas';?>>
                                                <label style=" font-family: Arial;" for=<?php echo 'AppliquePas';?>>Ne s'applique pas</label></div>

                                        </div>
                                    </div>

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
