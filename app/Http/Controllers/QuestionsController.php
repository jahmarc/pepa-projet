<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use IU\PHPCap\RedCapProject;

use config;

class QuestionsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiUrl = 'https://redcap.hes-so.ch/api/';  # replace this URL with your institution's # REDCap API URL.

        $apiToken = '607F2068FA415C0FA16FEC713AABAE66';    # replace with your actual API token

        try {
            $project = new RedCapProject($apiUrl, $apiToken);
        } catch (\Exception $e) {
            echo($e->getMessage());
        }

        $projectInfo = $project->exportMetadata();



        $str     = str_replace('\u','u',$projectInfo);
        $strJSON = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);

        $questions = json_decode($strJSON);

        //print_r($projectInfo);


        $categories = array('Informations sur la maladie', 'Informations sur l\'accompagnement', 'Compétences d\'accompagnement', 'Possibilités de soutien', 'Besoin de souffler', 'Possibilités de répit',
            'Qualité du répit', 'Soutien émotionnel ou social formel', 'Soutien émotionnel ou social informel', 'Soutien pratique', 'Soutien financier ou légal');


        return view('survey.start', array(\Auth::user(), 'questions' => $questions, 'categories' => $categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        print_r($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }



    public function category($id){

        $apiUrl = 'https://redcap.hes-so.ch/api/';  # replace this URL with your institution's # REDCap API URL.

        $apiToken = '607F2068FA415C0FA16FEC713AABAE66';    # replace with your actual API token

        try {
            $project = new RedCapProject($apiUrl, $apiToken);
        } catch (\Exception $e) {
            echo($e->getMessage());
        }

        $projectInfo = $project->exportMetadata();



        $str     = str_replace('\u','u',$projectInfo);
        $strJSON = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);

        $questions = json_decode($strJSON);

        $categories = array('Informations sur la maladie', 'Informations sur l\'accompagnement', 'Compétences d\'accompagnement', 'Possibilités de soutien', 'Besoin de souffler', 'Possibilités de répit',
            'Qualité du répit', 'Soutien émotionnel ou social formel', 'Soutien émotionnel ou social informel', 'Soutien pratique', 'Soutien financier ou légal');


        //print_r($projectInfo);


        return view('survey.category1', array(\Auth::user(), 'questions' => $questions, 'id' => $id, 'categories' => $categories));

    }


}
