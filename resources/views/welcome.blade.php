<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Enregistrement nouveau née</title>

    <!-- vendor css -->
    <link href="{{ asset('/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('/css/azia.css')}}">

  </head>
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo"><span></span> E.N.N-Plateforme</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span>E.N.N-Plateforme</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item active show">
              <a href="{{ url('/')}}" class="nav-link"><i class="typcn typcn-chart-area-outline"></i>Accueil</a>
            </li>
    
            <li class="nav-item">
              <a href="{{ url('/create')}}" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Nouvel enregistrement</a>
            </li>
          </ul>
        </div><!-- az-header-menu -->
        
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">
          <div class="row row-sm mg-b-20 mg-lg-b-0">
            @if($layout=='index')
              @include('listenouveaunee')
            @elseif($layout=='create')
              @include('newnouveaunee')
            @endif
          </div><!-- row -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container ht-100p pd-t-0-f">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div><!-- container -->
    </div><!-- az-footer -->


    <script src="{{ asset('/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{ asset('/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('/lib/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{ asset('/js/azia.js')}}"></script>
    <script src="{{ asset('/js/chart.flot.sampledata.js')}}"></script>
    <script src="{{ asset('/js/dashboard.sampledata.js')}}"></script>
    <script src="{{ asset('/js/jquery.cookie.js')}}" type="text/javascript"></script>
    
    <script src="{{ asset('/lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <script src="{{ asset('/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <script src="{{ asset('/lib/pickerjs/picker.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.cookie.js')}}" type="text/javascript"></script>
    
  </body>
</html>
