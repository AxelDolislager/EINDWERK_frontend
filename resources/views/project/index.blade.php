@extends('layout')

@section('content')
    <section class='projectlist'>
        @foreach($projects as $project)
            <a href='/project/{{ $project->id }}' class='project' style='background-color: {{ $project->attributes->color }};'>
                <div class='left'>
                    <span class='projecttitle'>{{ $project->attributes->title }}</span>
                    <span class='projecttotals'>{{$project->attributes->completed_todos}} / {{$project->attributes->total_todos}} completed</span>
                </div>
                <div class='right'>
                    <div class='projectdate'>
                        <span>created at</span>
                        <span class='projectdatavalue'>
                            {{ date('d/m/Y', strtotime($project->attributes->created_at)) }}
                        </span>
                    </div>
                </div>
            </a>
        @endforeach
        <a class="project emptyone"></a>
    </section>
    <div class='bottomaddoverlay'>
        <a href='/project/create' class='addbutton'><i class='fal fa-plus'></i></a>
    </div>
@endsection