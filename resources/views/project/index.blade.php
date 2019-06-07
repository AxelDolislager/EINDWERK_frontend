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
                            20/05/2019
                        </span>
                    </div>
                </div>
            </div>



            {{-- {{dd($project->server)}}
            {{dd($project->type)}}
            {{dd($project->id)}}
            {{dd($project->attributes->title)}}
            {{dd($project->attributes->body)}} --}}
        @endforeach
        {{-- <a href='/project/id' style='background-color: #e74c3c;'>
            <div class='left'>
                <span class='projecttitle'>Project 1</span>
                <span class='projecttotals'>0 / 5 completed</span>
            </div>
            <div class='right'>
                <div class='projectdate'>
                    <span>created at</span>
                    <span class='projectdatevalue'>
                        20/05/2019
                    </span>
                </div>
            </div>
        </a>

        <a href='/project/id' style='background-color: #2ecc71;'>
            <div class='left'>
                <span class='projecttitle'>Project 1</span>
                <span class='projecttotals'>0 / 5 completed</span>
            </div>
            <div class='right'>
                <div class='projectdate'>
                    <span>created at</span>
                    <span class='projectdatevalue'>
                        20/05/2019
                    </span>
                </div>
            </div>
        </a> --}}
    </section>
    <div class='bottomaddoverlay'>
        <a href='/project/create' class='addbutton'><i class='fal fa-plus'></i></a>
    </div>
@endsection