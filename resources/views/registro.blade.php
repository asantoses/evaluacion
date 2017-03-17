
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Evaluación</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('/css/cover.css') }}">
    <link rel="stylesheet" href="{{ asset('/datepicker/bootstrap-datetimepicker.min.css') }}">
    
  </head>

  <body>


    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Evaluación</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Registro</a>
              </nav>
            </div>
          </div>

    @yield('content')
  </div>
</div>
</div>

<div class="modal fade" id="processingAlert" tabindex="-1" role="dialog" aria-labelledby="Processing" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Guardando información</h4>
              </div>
              <div class="modal-body">
                <p><strong>Su información está siendo procesada. ¡Espere por favor!</strong></p>
                <p>Esta ventana se cerrara automáticamente al terminar el proceso.</p>
                <div class="waiting" style="margin: 0 auto !important"></div>
              </div>
          </div>
        </div>
    </div>
<a class="btn btn-primary" data-toggle="modal" href='#mdalProcesa'>modal</a>
<div class="modal fade" id="mdalProcesa" tabindex="-1" role="dialog" aria-labelledby="Processing" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default resultado" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


          <div class="mastfoot">
            <div class="inner">
              <p><a>Construido con Boostrap</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('/datepicker/moment.js') }}"></script>
    <script src="{{ asset('/datepicker/locale/es.js') }}"></script>
    <script src="{{ asset('/datepicker/bootstrap-datetimepicker.js') }}"></script>


    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/registro.js') }}"></script>

    
  </body>
</html>
