<!DOCTYPE html>
<html>
    <head>
        <title>Eindwerk todo app</title>
        <link href="/fontawesome-pro-5.8.2-web/css/all.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <script src="/js/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        @if(isset($backend_server))
        <div class="serverinfo">
            Data verkregen via: <b>{{$backend_server}}</b>
        </div>
        @endif
        <main>
            <header>
                @if(isset($pagetitle))
                    <a href="{{$previous_page}}" class='arrowback'><i class='fa fa-chevron-left'></i></a>
                    <span class='pagetitle'>{{ $pagetitle }}</span>
                @else
                    <span class='nothing'></span>
                    <span class='pagetitle'>eindwerk.todo</span>
                @endif
            </header>

            @yield('content')
        </main>
    </body>
</html>