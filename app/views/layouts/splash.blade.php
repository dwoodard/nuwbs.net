<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Scada:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/bower/normalize-css/normalize.css"/>
    <link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/flipclock.css"/>
    <link rel="stylesheet" href="/css/splash.css"/>
</head>
<body>


<header id="main-nav">
    <div class="container">
        <img src="/img/nuwbs-logo.png" alt=""/>
    </div>
</header>

<div id="content">

    <div class="container">
        <div id="description" class="row">
            <div class="col-xs-9 col-xs-offset-3">
                <h2>Nuwbs is Coming Soon!</h2>

            </div>
        </div>
        <div id="counter" class="row">
            <div class="clock col-xs-9 col-xs-offset-1"></div>
        </div>
        <div id="promo-video" class="row">
            <!--    <div id="promo">Video</div>-->
        </div>

        <div id="mailchimp" class="row">
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup" class="col-xs-4 col-xs-offset-3">
                <form
                    action="http://nuwbs.us8.list-manage.com/subscribe/post?u=ee95f6cfa88ac4bfcd0f6d4bd&amp;id=c6763e8b8d"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                    target="_blank" novalidate>
                    <label for="mce-EMAIL">Interested? We'll let you know when it's ready</label>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                           placeholder="Email" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;">
                        <input type="text"name="b_ee95f6cfa88ac4bfcd0f6d4bd_c6763e8b8d" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                        <input type="submit" value="I want to know when NUWBS is ready" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success">
                    </div>
                </form>
            </div>

            <!--End mc_embed_signup-->

        </div>


    </div>
</div>

<footer>

</footer>


<script src="/bower/jquery/dist/jquery.js"></script>
<script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/bower/FlipClock/compiled/flipclock.min.js"></script>
<script src="/bower/moment/min/moment.min.js"></script>


<script>
    $(document).ready(function () {

        var launch_date = moment("2014 08 19", "YYYY MM DD").endOf('day');
        var clock = $('.clock').FlipClock(launch_date.diff(moment(), "seconds"), {
            clockFace: 'DailyCounter',
            countdown: true
        });

    })
</script>
</body>
</html>