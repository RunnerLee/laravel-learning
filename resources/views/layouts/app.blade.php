<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>@yield('title') - DobeeBlog</title>

    <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}" />
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    DobeeBlog
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('articles.index') }}">Articles</a></li>
                    <li><a href="{{ route('articles.create') }}">Write</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret @if(Auth::user()->notification_count) color-red @endif"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('notifications.index') }}"><span class="fa fa-btn fa-envelope @if(Auth::user()->notification_count) color-red @endif"></span>Notifications</a></li>
                                <li><a href="{{ route('users.show', Auth::id()) }}"><span class="fa fa-btn fa-user"></span>Profiles</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <hr>
                <div class="col-md-12">
                    <p>@RunnerLee</p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">

        var Config = {
            user: {
                id: '{{ Auth::check() ? Auth::id() : '' }}',
                name: '{{ Auth::check() ? Auth::user()->name : '' }}'
            },
            routes: {
                upload: {
                    image: '{{ route('upload.image') }}'
                }
            },
            errors: []
        };

        @foreach($errors->messages() as $key => $value)
        Config.errors.push({
            name: '{{ $key }}',
            message: '{{ $value[0] }}'
        });
        @endforeach

    </script>


    @yield('footer-script')
    <script type="text/javascript" src="{{ elixir('assets/js/app.js') }}"></script>
</body>
</html>
