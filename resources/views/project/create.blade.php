@extends('layout')

@section('content')
    <section class='createproject'>
        <form class='createprojectform' action='/project/' method='post'>
            @csrf
            <h4>Nieuw project aanmaken...</h4>
            <input type='text' class='input' placeholder='Projectnaam' name='title'>
            <input type='text' class='input' placeholder='Kleur' name='color'>
            <input type='submit' id='submit' value='Maak project aan'>
        </form>
    </section>
@endsection