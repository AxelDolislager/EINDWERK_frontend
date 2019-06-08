<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TodoController extends Controller{
    public function index(){}
    public function create($projectid){
        return view('todo.create', [
            "pagetitle" =>  "Nieuwe taak aanmaken",
            "previous_page" => "/project/$projectid",
            "project_id" => $projectid
        ]);
    }
    public function store(Request $request){
        $client = new Client(['base_uri' => env('BACKEND_SERVER_URL')]);
        $response = $client->request('POST', 'todos', [
            'form_params' => [
                'project_id' => $request->project_id,
                'title' => $request->title,
            ],
        ]);
        return redirect('/project/' . $request->project_id);
    }
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
