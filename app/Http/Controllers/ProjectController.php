<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProjectController extends Controller{
    public function index(){
        $client = new Client(['base_uri' => 'http://backend.eindwerk.local/api/']);
        $response = $client->request('GET', 'projects');

        $projects = (array)json_decode($response->getBody()->getContents());

        return view('project.index', [
            "projects" => $projects['data']
        ]);
    }
    public function create(){
        return view('project.create', [
            "pagetitle" =>  "Nieuw project aanmaken",
            "previous_page" => "/",
        ]);
    }
    public function store(Request $request){}
    public function show($id){
        $client = new Client(['base_uri' => 'http://backend.eindwerk.local/api/']);
        $response = $client->request('GET', 'projects/' . $id);

        $project = (array)json_decode($response->getBody()->getContents());

        return view('project.show', [
            "pagetitle" =>  $project->attributes->title,
            "previous_page" => "/",
            "project" => $project
        ]);
    }
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
