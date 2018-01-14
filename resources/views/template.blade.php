<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') :: UAV GIS Wildfire Mapping </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
      <link href="css/added.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">
                <img class="img-responsive margin-b10" src="img/logo-logo.png" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-11">
                <h1 class="judul-head">Sistem Informasi Geografis</h1>
                <p><i class="fa fa-map-marker fa-fw"></i> peta persebaran kebakaran hutan di Indonesia</p>
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
      </div>
    </div>
    <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Status</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/"><i class="fa fa-home"></i> HALAMAN DEPAN</a></li>
            <li><a href="/data"><i class="fa fa-list-ul"></i> DATA KEBAKARAN HUTAN</a></li>
            <li><a href="/peta"><i class="fa fa-map-marker"></i> PETA PERSEBARAN KEBAKARAN HUTAN</a></li>
            <li><a href="/tentang" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> ABOUT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="/admin"><i class="fa fa-caret-square-o-right"></i> LOGIN</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> @yield('judul')</strong></h2>
            </div>
            <div class="panel-body">
              <div class="centered">
              @yield('isi')
              </div>
            </div>
            </div>
          </div>


        </div>
      </div>
      </div>


<div class="footer footer1">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <img src="img/logo-logo.png" width="72" height="72" />
            <h4 class="white">Sistem Informasi Geografis Peta Kebakaran Hutan</h4>
          <h3 class="white">Indonesia</h3>
          <ul class="list-inline">
            <li><a href="" class="link-footer">Beranda</a></li>
            <li><a href="" class="link-footer">Petunjuk</a></li>
            <li><a href="" class="link-footer">Tentang</a></li>
          </ul>
          <h5 class="white">Copyright &copy; Yonif Fafan 2017</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">About</h4>
      </div>
      <div class="modal-body">
        <h4>SISTEM INFORMASI GEOGRAFIS KEBAKARAN HUTAN DI INDONESIA</h4>
        <p>Copyright &copy; YONIFFAFAN 2017</p>
        <p>Diharapkan program ini memberikan manfaat</p>
      </div>
    </div>
  </div>
</div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/script.js"></script>
        <script src="js/added.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/datatable-bootstrap.js"></script>

  </body>
</html>
