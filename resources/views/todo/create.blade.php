@extends('layout')

@section('content')
    <section class='createtodo'>
        <form class='createtodoform' action='/todo/' method='post'>
            @csrf
            <h4>Nieuwe todo aanmaken...</h4>
            <input type='hidden' name='project_id' value='projectid'>
            <input type='text' class='input' value='Todonaam' name='title'>
            <input type='submit' id='submit' value='Maak todo aan'>
        </form>
    </section>
@endsection