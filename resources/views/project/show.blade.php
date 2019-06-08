@extends('layout')

@section('content')
    <section class='todolist'>
        @foreach($project['relationships']->todos->data as $todo)
        @if($todo->attributes->completed == true)
        <form action='/project/{{$project['id']}}/todo/{{$todo->id}}' method='post' class='todo checked' onclick="$(this).submit();">
            @csrf
            @method('PUT')
            <span class='todobody'>{{$todo->attributes->title}}</span>
            <span class='todocircle'>
                <i class='fal fa-check'></i>
            </span>
        </form>
        @else
            <form action='/project/{{$project['id']}}/todo/{{$todo->id}}' method='post' class='todo' onclick="$(this).submit();">
                @csrf
                @method('PUT')
                <span class='todobody'>{{$todo->attributes->title}}</span>
                <span class='todocircle'></span>
            </form>
        @endif
        @endforeach
        <div class="emptyone"></div>
    </section>
    <div class='bottomaddoverlay'>
            <a href='/project/1/todo/create' class='addbutton'><i class='fal fa-plus'></i></a>
        </div>
@endsection