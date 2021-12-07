<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap / CSS -->

    <link
       href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
        <!-- Include Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

     @yield('boot')
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link href="/css/happy.css" rel="stylesheet" />

    @yield('css')

    <style>
      body {
        overflow-x : hidden !important;
      }
      .navbar {
        justify-content: start !important;
      }
    </style>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <title>Ghifary MN</title>
  </head>
  <body>


  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  @yield('css')
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile text-center">
        <img src="/img/ghifary.jpg" alt="" class="img-fluid rounded">
        <h1 class="text-light">Ghifary Muhammad N</h1>
        <h1 class="text-light">5026201156</h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/pegawai" class="nav-link scrollto"><i class='bx bx-male-female'></i></i> <span>Pegawai</span></a></li>
          <li><a href="/absen" class="nav-link scrollto"><i class="bx bx-file-blank"></i>  <span>Absen</span></a></li>
          <li><a href="/tugas" class="nav-link scrollto"><i class='bx bx-task'></i><span>Tugas</span></a></li>
          <li><a href="/minggudepan" class="nav-link scrollto"><i class='bx bx-calendar-week'></i><span>Minggu Depan</span></a></li>
          <li><a href="/praktikum" class="nav-link scrollto"><i class='bx bx-list-ul'></i><span>Praktikum</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->



  <main id="main">
  <div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-sm-10 ">
            <h2 style="color: rgb(58, 7, 20); text-align: center;" class="mb-4"><b>@yield('judulhalaman')</b></h2>
             @yield('layout')
        </div>
    </div>
    @yield('judulhalaman')<br>
    @section('konten')
    @show

  </div>
    </main>



  <footer id="footer" style="margin-top= 120px;">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>
         <br> <span>5026201156 - Ghifary Muhammad N</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  </body>
</html>
