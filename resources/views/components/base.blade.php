<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    Basic Page Needs
    ==================================================
    -->
    <meta charset="UTF-8">
    <title> Pegadaian | Ketapang</title>
    <meta name="description" content="AuCreative theme tempalte">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuCreative theme template">
    <!--
    Mobile Specific Metas
    ==================================================
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    CSS
    ==================================================
    -->
    <link href="{{ url('public/base') }}/fonts/fonts.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/elegant-icons/style.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/css-hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/chosen/chosen.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/plyr/plyr.min.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/revolution/css/layers.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/revolution/css/navigation.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/vendor/revolution/css/settings.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/css/main.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/css/switcher.css" rel="stylesheet">
    <link href="{{ url('public/base') }}/css/colors/primary.css" rel="stylesheet" id="colors">
    <link href="{{ url('public/base') }}/css/retina.css" rel="stylesheet">
    <!--
    Favicons
    ==================================================
    -->
    <link rel="shortcut icon" href="{{ url('public/base') }}/logo.png">
   
    <script src="{{ url('public/base') }}/js/modernizr-custom.js"></script>
</head>

<body>
   
    {{-- <div class="page-loader">
        <div class="loader"></div>
    </div> --}}
  
    <x-base.header />
    
    {{ $slot }}
   

    <x-base.footer />
    <div id="up-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--
    Javascripts
    ==================================================
    -->
    <script src="{{ url('public/base') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/headroom/headroom.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/matchHeight/dist/jquery.matchHeight-min.js"></script>
    <script src="{{ url('public/base') }}/vendor/SmoothScroll/SmoothScroll.js"></script>
    <script src="{{ url('public/base') }}/vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/plyr/plyr.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/jquery-accordion/js/jquery.accordion.js"></script>
    <script src="{{ url('public/base') }}/vendor/chosen/chosen.jquery.js"></script>
    <script src="{{ url('public/base') }}/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/paroller.js/jquery.paroller.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/retinajs/dist/retina.min.js"></script>
    <script src="{{ url('public/base') }}/js/owl-custom.js"></script>
    <script src="{{ url('public/base') }}/js/main.js"></script>
    <script src="{{ url('public/base') }}/js/switcher-custom.js"></script>
    <script src="{{ url('public/base') }}/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ url('public/base') }}/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="{{ url('public/base') }}/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ url('public/base') }}/js/revo-slider-custom.js"></script>
    <!--
    End Document
    ==================================================
    -->
</body>

</html>