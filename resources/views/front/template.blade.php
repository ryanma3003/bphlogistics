<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Berkat Panduan Hikam</title>
        <meta name="description" content="Berkat Panduan Hikam bergerak di bidang jasa penyewaan truck trailer dan bongkar muat">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="berkat panduan hikam, berkat, panduan, hikam, container, trucking, freight, indonesia, jasa, pelabuhan, logistics">
        <meta name="author" content="Berkat Panduan Hikam">
        <meta name="robots" content="index, follow">
        <meta name="google-site-verification" content="GUZze-ZBhcD1Ecln8Kt0j17-Cspd1yUtQVIxnXrg7yo" />
        <meta name="theme-color" content="#222222"> <!-- Android 5.0 Tab Color -->
        <link rel="shortcut icon" href="{{asset('front/img/bph-icon.png')}}">

        <meta property="og:locale" content="en_ID" />
        <meta property="og:title" content="Berkat Panduan Hikam"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{asset('front/img/logo/bph.png')}}"/>
        <meta property="og:description" content="Berkat Panduan Hikam Company Profile"/>
        <meta property="og:url" content="{{url('/')}}"/>


        <!-- Google Fonts -->
        <!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>-->
        <!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="{{asset('front/css/knight-iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/reset.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/jquery.fs.shifter.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/custom-bg.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/nav.css')}}">
        <script src="{{asset('front/js/vendor/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js')}}"></script>
        <script src="{{URL::asset('https://maps.googleapis.com/maps/api/js?key= AIzaSyDgKtKKhK8ePaU-yxSOG7Q8f5LI33ORpRk')}}"></script>
        
    
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @yield('body')

        <script src="{{asset('front/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('front/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.fs.shifter.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.countTo.js')}}"></script>
        <script src="{{asset('front/js/jquery.appear.js')}}"></script>
        <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('front/js/cd-google-map.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

        <script>
        $(document).ready(function () {

        $(".navbar a, footer a[href='#myNavbar']").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 900, function(){

            window.location.hash = hash;
            });

        } // End if

        });
        });
        </script>

        <script>

            var popupSize = {
                width: 780,
                height: 550
            };

            $(document).on('click', '.widget-socials > a', '.entry-share > a', function(e){

            var
                    verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                    horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

                var popup = window.open($(this).prop('href'), 'social',
                    'width='+popupSize.width+',height='+popupSize.height+
                    ',left='+verticalPos+',top='+horisontalPos+
                    ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

                if (popup) {
                    popup.focus();
                    e.preventDefault();
                }

            });
        </script>
        <!--<script src="{{asset('front/js/jquery.scrollTo.js')}}"></script>
        <script src="{{asset('front/js/jquery.easing.js')}}"></script>
    
        <script>document.createElement('section');var duration='913',easing='easeOutSine';</script>
        <script src="{{asset('front/js/script.js')}}"></script>-->
        
        <script src="{{asset('front/js/wow.min.js')}}"></script>
        <script src="{{asset('front/js/main.js')}}"></script>
        <script src="{{asset('front/js/jpreloader.js')}}"></script>
        <!--<script src="{{asset('front/js/navbar.js')}}"></script>-->

    </body>
</html>
