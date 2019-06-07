<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller{
    public function index(){}
    public function create($projectid){
        return view('todo.create', [
            "pagetitle" =>  "Nieuwe taak aanmaken",
            "previous_page" => "/project/$projectid"
        ]);
    }
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
