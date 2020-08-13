
    <html lang="en" class="full-height">
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('js/home.js') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
        <script src="{{ asset('js/sidebar.js') }}"></script>
    </head>

    <!--Main Navigation-->
    <body>
    @include('layouts.nav')

<div class="grid-container">
    @include('library.main')


    <div class="wrap">
        <div class="container2">
                @foreach($langinfo as $lang)
                <li><a href="{{ url('/mainfo',['lang' => $lang->lang])}}"><img src="{{$lang->image}}"></a></li>
                    <a href="{{$lang->cheat}}" download="{{$lang->cheat}}"class="ch">
                        <button class="btn">
                            <span class="buy">Cheatsheet</span>
                        </button></a>
                    <a  href="{{ url('/index',['lang' => $lang->lang])}}" class="bk">
                        <button class="btn">
                            <span class="buy">Book</span>
                        </button></a>
                @endforeach
    </div>
    <div class="aside">

        <div class="container3">
            <div class="keywrd"><p>KEYWORDS</p></div>
                @foreach($langinf as $lang)
                <li><img src="{{$lang->key}}"></li>
                @endforeach
        </div>

    </div>
        <footer class="fotter">
            <div class="flow"><p>+Follow</p></div>
            <div class="footer-social-icons">

                <ul class="social-icons">
                    <li><a href="javascript:fbShare('http://short.url', 'This is the header text for the URL', 'This is the description text.', 'http://facebook-thumb.url', 300, 300)"  class="facebook social-icon"> <i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter popup social-icon" href="http://twitter.com/intent/tweet?text=This+is+the+text+of+the+tweet+http://short.url+%23hash+%23tags" ><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
                    <li><a href="javascript:fbShareinst('http://short.url', 'This is the header text for the URL', 'This is the description text.', 'http://instagram-thumb.url/', 300, 300)"class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </footer>
        <div class="notification-box">

            @foreach($tbook as $tbk)
                <span class="notification-count"> {{$tbk->book}}</span>
            @endforeach

            <a href="/down">  <div class="notification-bell">
                    <span class="bell-top"></span>
                    <span class="bell-middle"></span>
                    <span class="bell-bottom"></span>
                    <span class="bell-rad"></span>
                </div></a>
        </div>
    </div>



    <!-- FOLLOW -->
    @foreach($tbook as $tbk)
        <a class="Follow" href="{{ url('/welcome') }}" target="blank_"></a>
    @endforeach
</div>



    <!-- FOLLOW -->


</div>
    <script>
        function fbShare(url, title, descr, image, winWidth, winHeight) {
            let winTop = (screen.height / 2) - (winHeight / 2);
           let winLeft = (screen.width / 2) - (winWidth / 2);
            window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
        }
    </script>
    <script>
        function fbShareinst(url, title, descr, image, winWidth, winHeight) {
            let winTop = (screen.height / 2) - (winHeight / 2);
            let winLeft = (screen.width / 2) - (winWidth / 2);
            window.open('https://www.instagram.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
        }
    </script>
    <script>
        $('.popup').click(function(event) {
          let width  = 575,
                height = 280,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                    ',width='  + width  +
                    ',height=' + height +
                    ',top='    + top    +
                    ',left='   + left;

            window.open(url, 'twitter', opts);

            return false;
        });
    </script>
    </body>
    </html>
    <!--Main Layout-->
