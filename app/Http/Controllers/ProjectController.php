<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProjectController extends Controller{
    public function index(){
        $client = new Client(['base_uri' => 'http://backend.eindwerk.local/api/']);
        $response = $client->request('GET', 'projects');

        // dd($response->getBody());
        dd($response->getBody()->getContents());

        return view('project.index', [
            "projects" => $response->getBody()->getContents()
        ]);
    }
    public function create(){
        return view('project.create', [
            "title" =>  "Nieuw project aanmaken",
            "previous_page" => "/"
        ]);
    }
    public function store(Request $request){

    }
    public function show($id){
        return view('project.show', [
            "title" =>  "Project",
            "previous_page" => "/"
        ]);
    }
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
