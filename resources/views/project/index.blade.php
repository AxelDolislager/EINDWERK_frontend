@extends('layout')

@section('content')
    <section class='projectlist'>
        @foreach($projects as $project)
            {{dd($project)}}
        @endforeach
        {{-- @foreach($projects['data'] as $project => $a)
            {{dd($project)}}
            {{dd($a)}}
        @endforeach --}}
        <a href='/project/id' style='background-color: #e74c3c;'>
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
        </a>
    </section>
    <div class='bottomaddoverlay'>
        <a href='/project/create' class='addbutton'><i class='fal fa-plus'></i></a>
    </div>
@endsection