@extends('layout')

@section('content')
    <section class='projectlist'>
        @foreach($projects as $project)
            <a href='/project/{{ $project->id }}' style='background-color: green;'>
                <div class='left'>
                    <span class='projecttitle'>{{ $project->attributes->title }}</span>
                    <span class='projecttotals'>0 / ? completed</span>
                </div>
                <div class='right'>
                    <div class='projectdate'>
                        <span>created at</span>
                        <span class='projectdatavalue'>
                            {{ date('d/m/Y', strtotime($project->attributes->created_at)) }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <div class='bottomaddoverlay'>
        <a href='/project/create' class='addbutton'><i class='fal fa-plus'></i></a>
    </div>
@endsection