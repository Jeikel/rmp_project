<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Earth Virtual</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .modal-mask {
              position: fixed;
              z-index: 9998;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(0, 0, 0, .5);
              display: table;
              transition: opacity .3s ease;
            }
            .modal-wrapper {
              display: table-cell;
              vertical-align: middle;
            }
            .modal-container {
              width: 300px;
              margin: 0px auto;
              padding: 20px 30px;
              background-color: #fff;
              border-radius: 2px;
              box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
              transition: all .3s ease;
              font-family: Helvetica, Arial, sans-serif;
            }
            .modal-header h3 {
              margin-top: 0;
              color: #42b983;
            }
            .modal-body {
              margin: 20px 0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">       
                <img sizes="(max-width: 960px) 100vw, 960px"
                    srcset="/images/logo_200.jpg 200w,
                            /images/logo_600.jpg 600w,
                            /images/logo_960.jpg 960w"
                    src="/images/logo_960.jpg"
                    alt="">
            </div>
        </div>
    </body>
</html>
