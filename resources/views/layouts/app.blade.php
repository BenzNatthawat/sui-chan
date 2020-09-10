<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ซุยจัน</title>

    <!-- META -->
    @include('layouts.meta')

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var oldVersion = jQuery.noConflict();
    </script>
    @yield('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ซุยจัน
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item text-black-50" style="align-self: center;">
                                <div style="line-height: 15px;text-align: right;">
                                    <div>ยินดีตอนรับ</div>
                                    <div>
                                        @switch(Auth::user()->role)
                                            @case('master') ผู้ดูแลระดับอำเภอ @break
                                            @case('header') ผู้ดูแลระดับตำบล @break
                                            @default ผู้ดูแลระดับหมู่บ้าน
                                        @endswitch
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->account->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.index') }}">
                                        แก้ไขโปรไฟล์
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/change_password') }}">
                                        เปลี่ยนรหัสผ่าน
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    @yield('scripts_footer')

    <script>
        $( document ).ready(function() {
            $("#tel").keyup(function (e){
                if (e.target.value.length >= 10){
                    e.target.value = e.target.value.slice(0, 10)
                }
            })
            let first_user_name = 0
            $("#user_name").keyup(function (e){
                if(e.target.value) {
                    if (!(/^[a-zA-Z0-9\s\\\/]+$/.test(e.target.value))) {
                        $("#user_name").addClass('is-invalid')
                        if(first_user_name == 0) {
                            $("#error-user_name").prepend("<strong>กรอกข้อมูล A-Z, a-z, 0-9</strong>")
                            first_user_name = 1
                        }
                    } else {
                        first_user_name = 0
                        $("#user_name").removeClass( "is-invalid" );
                        $("#error-user_name strong").remove()
                    }
                } else {
                    first_user_name = 0
                    $("#user_name").removeClass( "is-invalid" );
                    $("#error-user_name strong").remove()
                }
            })
        });
    </script>
</body>

</html>
