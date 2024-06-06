<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Juralia</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset(mix('css/bootstrap-lite.css')) }}" media="print" onload="this.media='all'; this.onload=null;"/>
        <link rel="stylesheet" href="{{ asset(mix('css/layout.css'))  }}" />

        <!-- Styles -->
        <style>

            /*======================
                404 page
            =======================*/


            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: calc(100vh - 10px);
                margin: 0;
                padding:10px 0;
            }

            .page_404  img {
                width:30rem;
                max-width: 90vw;
                height: auto;
            }

            .four_zero_four_bg {
            }


            .four_zero_four_bg h1{
                font-size:80px;
            }

            .four_zero_four_bg h3{
                font-size:80px;
            }

            .link_404{
                color: #fff!important;
                padding: 10px 20px;
                background: #4ac2cc;
                margin: 20px 0;
                display: inline-block;
                text-decoration: none;
            }
            .contant_box_404{
                margin-top:10px;
            }
        </style>
    </head>
    <body>
        <section class="page_404">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="four_zero_four_bg">
                            <img src="{{asset('/images/logos/logo-juralia.png')}}" alt="juralia logo">
                            <h1 class="text-center ">
                                @yield('code')
                            </h1>
                        </div>

                        <div class="contant_box_404">
                            <h3 class="h2">
                                @yield('message')
                            </h3>

                            <a href="/" class="link_404">Ir al inicio</a>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex justify-content-center ">
                        <div class="navbar-buttons d-md-flex d-block">
                            <div class="navbar-button">
                                <div class="navbar-button-ico navbar-button-ico-phone"></div>
                                <span class="navbar-button-text">828 088 388</span>
                            </div>
                            <div class="navbar-button">
                                <div class="navbar-button-ico navbar-button-ico-mobile"></div>
                                <span class="navbar-button-text">664 394 175</span>
                            </div>
                            <div class="navbar-button">
                                <div class="navbar-button-ico navbar-button-ico-mail"></div>
                                <span class="navbar-button-text">info@juralia.es</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
