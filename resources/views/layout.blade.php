<!DOCTYPE html>
<html>
    <head>
        <title>Eindwerk todo app</title>
        <link href="/fontawesome-pro-5.8.2-web/css/all.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <script src="/js/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <main>
            <header>
                @if(isset($project->attributes->title))
                    <a href="{{$previous_page}}" class='arrowback'><i class='fa fa-chevron-left'></i></a>
                    <span class='pagetitle'>{{ $project->attributes->title }}</span>
                @else
                    <span class='nothing'></span>
                    <span class='pagetitle'>eindwerk.todo</span>
                @endif
            </header>

            @yield('content')
        </main>
    </body>
</html>