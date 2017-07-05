<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="assets/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <?php
    $title = array("toasted", "adventure", "bill", "chameleon", "classic", "dough", "happy", "hover", "motivational");
    $descr = array("toasted", "adventure", "bill", "chameleon", "classic", "dough", "happy", "hover", "motivational");
    $img = array("0", "1", "2", "3", "4", "5", "6", "7", "8");
    $key = rand(0,8);
    ?>
    <title><?= "You are a " . $title[$key] . " doggo - suchdoge.com"?></title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= "You are " . $title[$key] . " doggo - suchdoge.com"?>" />
    <meta property="og:description" content="Discover which doggo you are at wow.suchdoge.com" />
    <meta property="og:url" content="http://wow.suchdoge.com/" />
    <meta property="og:site_name" content="<?= "You are " . $title[$key] . " doggo - suchdoge.com"?>" />
    <meta property="og:image" content=<?= "http://wow.suchdoge.com/i/" . "$img[$key]" . ".jpg" ?> />
    <meta property="og:image:width" content="960" />
    <meta property="og:image:height" content="640" />

    <!-- refresh FB cache -->

    <script>
        $.post(
            'https://graph.facebook.com',
            {
                id: 'http://wow.suchdoge.com',
                scrape: true
            },
            function(response){
                console.log(response);
            }
        );
    </script>


    <!--   staaalking -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-36211359-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
<div id="suchtext">
    <div class="veryfur hide" id="veryfur">
        very fur
    </div>

    <div class="muchblep hide" id="muchblep">
        much blep
    </div>

    <div class="sopattern hide" id="sopattern">
        so pattern
    </div>

    <div class="verydeveloper hide" id="verydeveloper">
        very developer
    </div>
</div>

<div class="outer-cookie">
    <span class="doge-close" id="suchclose"></span>
    <div class="inner-cookie">
        <p>Cookies much good for doggos, very tracking, such privacy</p>
    </div>
</div>

<script src="assets/main.js"></script>

</body>
</html>





