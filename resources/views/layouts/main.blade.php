<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}
        {{ Html::style(('css/bootstrap.css')) }}
        @if (isset($style))
            @foreach ($style as $css)
                {{ Html::style(( $css )) }}
            @endforeach
        @endif
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        {{--
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        --}}
        {{ Html::script('js/jquery.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}

        @if (isset($script))
            @foreach ($script as $js)
                {{ Html::script(($js)) }}
            @endforeach
        @endif
    </body>
</html>
