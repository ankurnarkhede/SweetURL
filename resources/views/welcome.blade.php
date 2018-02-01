<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sweet URL</title>

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Sweet URL
                </div>

                <div class="links">
                    {{--<form method="post" action="{{ route('shorten') }}">--}}
                    <form id="shorten_form">
                        <input type="text" placeholder="Enter URL" name="url" id="url">
                        <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}">
                        <input type="button" value="Shorten URL" name="shorten-url" id="shorten_url">


                    </form>
                    SWEET URL:
                    <input type="text"  name="sweet_url" id="sweet_url">



                </div>
            </div>
        </div>

    {{--load js--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--custom--}}
        <script>
            var token='{{ Session::token() }}';
            url = '{{ route('shorten') }}';

        </script>

        {{--<script src="js/script.js"></script>--}}
        <script src="public/js/script.js?no-cache=<?php echo time(); ?>"></script>







    </body>
</html>
