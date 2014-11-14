<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CCM - Barriles</title>
    {{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
    <header>
        @yield('header')
    </header>
    <div>
        <div style="max-width: 980px; margin: 0px auto;">
            @yield('content')
        </div>
    </div>
    <footer>
        @yield('footer')
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>