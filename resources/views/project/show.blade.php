@extends('layout')

@section('content')
    <section class='todolist'>
        <form action='/todo/id' method='POST' class='todo' onclick="$(this).submit();">
            @csrf
            @method('PUT')
            <span class='todobody'>Kaka</span>
            <span class='todocircle'></span>
        </form>

        <form action='/todo/id' method='POST' class='todo checked'>
            @csrf
            @method('PUT')
            <span class='todobody'>Kaka</span>
            <span class='todocircle'>
                <i class='fal fa-check'></i>
            </span>
        </form>
    </section>
    <div class='bottomaddoverlay'>
            <a href='/project/1/todo/create' class='addbutton'><i class='fal fa-plus'></i></a>
        </div>
@endsection