<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Despacho</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('bootstrap')}}/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('startbootstrap')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


  <style>
    footer{
      background: #6786a1;
      position: absolute;
      bottom: 0;
      width: 100%;
      line-height: 60px; /* Vertically center the text there */
    }
    footer >.footer-copyright{
      background: #3a4d5c;
      color: #fff;
    }
    .main-color, .card-main-color{
      background: #f8f8f8 !important;
    }
    html {
      position: relative;
      min-height: 100%;
    }
    body {
      margin-bottom: 460px; /* Margin bottom by footer height */
    }
  </style>
</head>

<body id="page-top" class="main-color">

  <!-- Navigation -->
  <div style="margin-bottom: 50px !important;">
    @include('core.page.parcials.nav')
  </div>

  @yield('header');
  <!-- Content -->

  @yield('contenido','Sin contenido ')

  <!-- Footer -->

  @yield('footer');

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('startbootstrap')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('bootstrap')}}/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('bootstrap')}}/js/bootstrap.js"></script>


</body>

</html>
