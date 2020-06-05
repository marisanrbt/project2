<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perpustakaan IPB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">
        body{
            background-color: #b0c4de;
            color: #191970;
            font-size: 20px;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        #utama{
            Width: 300px;
            margin: 0 auto;
            margin-top: 12%;
            background-color: #b0c4de;
        }

        #judul{
            padding: 15px;
            text-align: center;
            color: #b0c4de;
            font-size: 20px;
            background-color: #000080;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom: 3px solid #808080;
        }

        #data{
            background-color: #dcdcdc;
            padding: 20px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        input{
            padding: 8px;
            border: 0;
        }

        .content{
            text-align: center;
        }
        .lebar{
            width: 243px;
        }
        .tombol{
            background-color: #808080;
            border-radius: 3px;
            text-align: center;
            color: #fff
        }
        .tombol:hover{
            background-color: #000090;
        }
        .tittle m-b-md{
             margin-bottom: 30px;
        }

        </style>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Selamat Datang di Perpustakaan IPB
            </div>

        <div id="utama">
            <div id="judul" class="content">
                Harap Login Untuk Masuk
            </div>

            <div id="data" class="content">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" class="btn btn-success">{{ __('Login') }}</a>
                </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" class="btn btn-success" class="d_inline">{{ __('Register') }}</a>
                        </li>
                @endif
            </div>
        </div>
    </body>
    </head>
</html>
