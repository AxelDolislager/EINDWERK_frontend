<?php
Route::get('/', function () {
    return redirect('/project');
});

Route::resource('/project', 'ProjectController');
Route::resource('/project/{projectid}/todo', 'TodoController');