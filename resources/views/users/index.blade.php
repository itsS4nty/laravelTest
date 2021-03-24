<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim & UPDIVISION

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

 <html lang="en">
     <head>
         <meta charset="utf-8" />
         <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
         <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}">
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
         <title>User management</title>
         <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
         <!--     Fonts and icons     -->
         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
         <!-- CSS Files -->
         <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
         <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
         <!-- CSS Just for demo purpose, don't include it in your project -->
         <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />
 
         <!-- Canonical SEO -->
         <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-laravel" />        <!--  Social tags      -->
         <meta name="keywords" content="design system, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, light bootstrap, light bootstrap dashboard, creative tim,updivision, html dashboard, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap dashboard, responsive dashboard, laravel, laravel php, laravel php framework, free laravel admin template, free laravel admin, free laravel admin template + Front End + CRUD, crud laravel php, crud laravel, laravel backend admin dashboard">
         <meta name="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">
 
 
         <!-- Schema.org markup for Google+ -->
         <meta itemprop="name" content="Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION">
         <meta itemprop="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">
 
         <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/213/opt_lbd_laravel_thumbnail.jpg">
 
         <!-- Twitter Card data -->
         <meta name="twitter:card" content="product">
         <meta name="twitter:site" content="@creativetim">
         <meta name="twitter:title" content="Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION">
 
         <meta name="twitter:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">
         <meta name="twitter:creator" content="@creativetim">
         <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/213/opt_lbd_laravel_thumbnail.jpg">
 
         <!-- Open Graph data -->
         <meta property="fb:app_id" content="655968634437471">
         <meta property="og:title" content="Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION" />
         <meta property="og:type" content="article" />
         <meta property="og:url" content="https://www.creative-tim.com/live/light-bootstrap-dashboard-laravel" />
         <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/213/opt_lbd_laravel_thumbnail.jpg"/>
         <meta property="og:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up." />
         <meta property="og:site_name" content="Creative Tim & UPDIVISION" />
           <!-- Google Tag Manager -->
         <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
         <!-- End Google Tag Manager -->
     
         <script>
             // Facebook Pixel Code Don't Delete
               ! function(f, b, e, v, n, t, s) {
                 if (f.fbq) return;
                 n = f.fbq = function() {
                   n.callMethod ?
                     n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                 };
                 if (!f._fbq) f._fbq = n;
                 n.push = n;
                 n.loaded = !0;
                 n.version = '2.0';
                 n.queue = [];
                 t = b.createElement(e);
                 t.async = !0;
                 t.src = v;
                 s = b.getElementsByTagName(e)[0];
                 s.parentNode.insertBefore(t, s)
               }(window,
                 document, 'script', '//connect.facebook.net/en_US/fbevents.js');
               try {
                 fbq('init', '111649226022273');
                 fbq('track', "PageView");
               } catch (err) {
                 console.log('Facebook Track Error:', err);
               }
         </script>
     </head>
 

<body class="clickup-chrome-ext_installed">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>

    <div class="wrapper ">

        <div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebarBackground.jpg') }}" data-color="black">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        
        Tip 2: you can also add an image using data-image tag
        -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        {{ __("Subastas de coches") }}
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>{{ __("Inicio") }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('user.index')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>{{ __("Mi perfil") }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('page.index', 'table')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>{{ __("Mis subastas") }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('page.index', 'typography')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>{{ __("Mis coches") }}</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('page.index', 'maps')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>{{ __("Explorar subastas") }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>                
        <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
        </div>
        </div>            
        <div class=" main-panel ">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">{{ __('Mi perfil') }}</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav   d-flex align-items-center">
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Log out') }} </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>                    
            <div class="content">
                <div class="container-fluid">
                </div>
            </div>
    </div>
</div>
<footer class="footer">
<div class="container -fluid ">
    <nav>
        <ul class="footer-menu">
            <li>
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li>
                <a href="https://www.updivision.com" class="nav-link" target="_blank">Updivision</a>
            </li>
            <li>
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li>
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
        </ul>
        <p class="copyright text-center">
            ©
            <script>
                document.write(new Date().getFullYear())
            </script>2020
            <a href="http://www.creative-tim.com">Creative Tim</a> &amp; <a href="https://www.updivision.com">Updivision</a> , made with love for a better web
        </p>
    </nav>
</div>
</footer>            </div>

    </div>
   



        <!--   Core JS Files   -->
        <script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    
        <script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!--  Chartist Plugin  -->
        <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
        <script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
        <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
        @stack('js')
        <script>
          $(document).ready(function () {
            
            $('#facebook').sharrre({
              share: {
                facebook: true
              },
              enableHover: false,
              enableTracking: false,
              enableCounter: false,
              click: function(api, options) {
                api.simulateClick();
                api.openPopup('facebook');
              },
              template: '<i class="fab fa-facebook-f"></i> Facebook',
              url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });
    
            $('#google').sharrre({
              share: {
                googlePlus: true
              },
              enableCounter: false,
              enableHover: false,
              enableTracking: true,
              click: function(api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
              },
              template: '<i class="fab fa-google-plus"></i> Google',
              url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });
    
            $('#twitter').sharrre({
              share: {
                twitter: true
              },
              enableHover: false,
              enableTracking: false,
              enableCounter: false,
              buttons: {
                twitter: {
                  via: 'CreativeTim'
                }
              },
              click: function(api, options) {
                api.simulateClick();
                api.openPopup('twitter');
              },
              template: '<i class="fab fa-twitter"></i> Twitter',
              url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });
          });
        </script>
    </html>
