<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gracias por Confirmar tu Correo</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('emailconfirmation/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="{{ asset('emailconfirmation/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('emailconfirmation/css/coming-soon.min.css') }}" rel="stylesheet">

</head>

<body>



    @yield('content')



  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ asset('emailconfirmation/mp4/bg.mp4') }}" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h2 class="mb-3">!Gracias por Confirmar tu Correo!</h2>
            <p class="mb-5">Próximamente nos estaremos comunicando contigo para atender tu 
              <strong>Solicitud</strong></p>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('emailconfirmation/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('emailconfirmation/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/coming-soon.min.js') }}"></script>

</body>

</html>
