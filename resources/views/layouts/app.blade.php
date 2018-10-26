<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Round Recorder') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>   
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/bundle.js') }}" defer></script>
    @yield('page-specific-js')
    <script src="{{ asset('js/script.js') }}" defer></script>   

    <!-- Styles -->
    @yield('page-specific-css')
    <link href="{{ asset('css/mainstyle.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">

        <header>        

            <div class="container-fluid">   
                
                <div class="row">

                    <div class="col-auto">

                        <a class="logo-link" href="{{ url('/') }}">
                            <img src="/images/round-recorder.svg" alt="Round Recorder" class="img-fluid" />
                        </a>

                    </div>

                    <div class="col">
                        
                        <ul class="nav justify-content-end">
                            @guest

                            <li class="nav-item login-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            <li class="nav-item register-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>                            

                            @else

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profile') }}">{{ __('View Profile') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('courses.create') }}">{{ __('Add Course') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('rounds.create') }}">{{ __('Add Round') }}</a>
                                </li> 

                                <li class="nav-item logout-item dropdown">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                </li>                                

                            @endguest  
                        </ul> 

                    </div>    
                                       

                </div>
                <!--/.row -->

            </div>
            <!--/.container-fluid -->            

        </header>       
   
        <div class="page-heading-holder">

            <div class="container-fluid">
                
                @yield('page-heading')

            </div>
            <!--/.container-fluid -->

        </div>        

        <main class="py-4">           

            <div class="container-fluid">

            @if(Session::has('message'))

                <div class="alert alert-main alert-{{ Session::get('message-type') }} alert-dismissable fade show" role="alert">

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
                    
                </div>

            @endif                

                @yield('content')

            </div>
            <!--/.container-fluid -->

        </main>
    </div>
</body>
</html>
