<?php
session_start();
//This file to load survey and associations from RedCap

use App\Http\Controllers\ImportSurvey;


$data = new ImportSurvey();
$info = $data->import(); //Get survey from REDCap
$info = json_decode($info);

findCategoryShortName($info);

$_SESSION['survey'] = serialize($info);

echo '<script language="Javascript">
		document.location.replace("survey.php");
		</script>';


//Display category shortname in final chart
function findCategoryShortName($array){

    $arrayNameCategory=null;
    $arrayPositionCategory = [];
    $i = 0;
    $j=0;

    foreach ($array as $element){
        if($element->section_header!=''){
            $titleCategory = $element->section_header;
            $shortTitle = substr($titleCategory, 0, strpos($titleCategory, ':'));//Get string until ':'

            $arrayNameCategory[$i]=$shortTitle;
            $i+=1;
            array_push($arrayPositionCategory, $j);
        }
        $j++;
    }
    // Prepare value to start survey
    $_SESSION['start']=array_shift($arrayPositionCategory);
    $_SESSION['next']= $arrayPositionCategory[0];
    $_SESSION['categories']=$arrayNameCategory;
    $_SESSION['survey_size'] = count($arrayNameCategory, NULL);//Number of string
    $_SESSION['categorie_positions'] =$arrayPositionCategory;//Position de chaque catÃ©gorie dans le tableau
    $_SESSION['num_category'] =1;
}

