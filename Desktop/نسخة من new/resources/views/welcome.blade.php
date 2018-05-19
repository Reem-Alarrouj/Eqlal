<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #14447a;
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                widows: 100vh;
                margin: 0;
            }

            .full-height {
                height: 42vh;
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
            .logo
            {
                margin-top: 100px;
                margin-bottom: 100px;
                
                width: 100%;
                height: 100%;
                background-color: #2b2b2b;
                border-color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

                <div class="top-right links">
            
                        <a href="{{ url('/home') }}">الرئيسية </a>

                        <a href="#"> الطالبات </a>
                        <a href="#"> مزود الخدمة</a>

                </div>
            

            <div class="content">
                <div class="title m-b-md">
                   <div class="logo"> إقلال </div> 
                </div>



            </div>
        </div>
    </body>
</html>
