<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Scada:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/bower/normalize-css/normalize.css"/>
    <link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/bower/WOW/css/libs/animate.css">
    <link rel="stylesheet" href="/css/base.css"/>
</head>
<body>


    <header id="main-nav">
        <div class="container">
            <img src="/img/nuwbs-logo.png" alt=""/>
        </div>
    </header>

    <div id="content">
        <div id="promo">
            <!-- carousel -->
            <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                    <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner container">


                        <div class="item row active col-md-8 col-sm-4 col-xs-12">
                            <img src="/img/slide1.png"/>
                            <div class="carousel-caption wow pulse">
                                <h1 class="carousel-caption-header">Slide 1</h1>
                                <p class="carousel-caption-text hidden-sm hidden-xs">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                                </p>
                            </div>
                        </div>


                    <div class="item row col-md-8 col-sm-4 col-xs-12">
                        <img src="/img/slide1.png"/>
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Slide 2</h1>
                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                            </p>
                        </div>
                    </div>

                    <div class="item row col-md-8 col-sm-4 col-xs-12">
                        <img src="/img/slide1.png"/>
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Slide 3</h1>
                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>


            </div>
            <!-- /carousel -->
        </div>

    </div>

    <footer>

    </footer>


    <script src="/bower/jquery/dist/jquery.js"></script>
    <script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/bower/FlipClock/compiled/flipclock.min.js"></script>
    <script src="/bower/moment/min/moment.min.js"></script>
    <script src="/bower/WOW/dist/wow.min.js"></script>


    <script>
        $(document).ready(function () {
            new WOW().init();
        })
    </script>
</body>
</html>