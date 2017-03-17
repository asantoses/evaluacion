
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
    
  </head>

  <body>


    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Evaluación</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Principal</a>
              </nav>
            </div>
          </div>

<div id="#seccion" class="main">
<div class="pull-right">
  <button type="button" class="btn btn-success btn-lg">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button><br><br></div>
</div>
<table class="table well" id="empleados">
  <thead class="thead-inverse">
    <tr>
      <th class="text-center">#</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Apellido Paterno</th>
      <th class="text-center">Apellido Materno</th>
      <th class="text-center">Fecha Nacimiento</th>
      <th class="text-center">Ingreso Anual</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody></tbody>

</table>
    @yield('content')
</div>
<input type="button" class="btn btn-primary mdalBus" data-toggle="modal" value="Buscar">
<div class="modal fade" id="mdalBuscar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Buscar a</h4>
      </div>
      <div class="modal-body">

      <form>
        <input type="text" id="iptBusca" >
        <button type="button" class="btn btn-primary busca">Buscar</button>
      </form>
      <div id="buscados"></div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
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
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/principal.js') }}"></script>

    
    <?php 
    $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    ?>
    <script> var url ='{{ $_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI_PATH'] }}'; </script>
  </body>
</html>
