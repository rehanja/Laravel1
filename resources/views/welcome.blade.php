<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EZYent</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            html, body {
                /*background-image: url("http://financiallysorted.com.au/wp-content/uploads/2018/01/Taxation-Accounting.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                z-index: -3;*/
                font-family: 'Raleway', sans-serif;
                width: 100%;
                height: 91%;
            }

            .hero {
                width: 100%;
                height: 100%;
                min-width: 100%;
                min-height: 100%;
                position: relative;
            }

            .hero::before {
                background-image: url(http://www.pptbackgrounds.org/uploads/abstract-business-people-powerpoint-backgrounds.jpg);
                background-size: cover;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -3;
            }

            





            .full-height {
                height: 100vh;
            }

            .nav{
                width: 100%;
                height: 60px;
                background-color: #4d2844;
                z-index: +1;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: #FFFFFF;
                text-shadow: #343a40 1.5px 1.5px;
                min-width: 100%;
                min-height: 12em;
                position: relative;
            }

            .content::before {
                content: "";
                display: block;
                position: absolute;
                margin-left: 0;
                min-width: 100%;
                min-height: 29.1em;
                z-index: -1;
                opacity: 0.6;
                background-color: #3d1f36;
            }

            .title {
                font-size: 45px;
                color: #FFFFFF;
                text-transform: uppercase;
                letter-spacing: .01rem;
                word-spacing: .6rem;
            }

            .top-right > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <div class="hero">
        <div class="nav">
            <nav class="navbar">
                <form class="form-inline">
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                    <a href="{{ url('/profile') }}">Profile</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Sign Up</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </form>
            </nav>
        </div>

            

            <div class="content">
                <div class="title m-b-md">
                    <strong>Your Events Success <br> Here...</strong>
            </div>
    
            </div>
            <br>
            @role('or_fol')
            <p> orfol</p>
            @endrole
            @role('or_pm')
            <p> orpm</p>
            @endrole
            @role('p_member')
            <p> pmember</p>
            @endrole
            @role('or_pm|supervising_officer')
            <p>supervising officer</p>
            @endrole

        </div>
    </div>
    </body>
</html>
