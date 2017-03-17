@extends('registro')

@section('content')
<div id="seccion" class="create">
<form class="well form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Registro de Empleado</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Nombre</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="nombre" placeholder="Nombre" class="form-control"  type="text">
    </div>
      <span class="error"></span>

  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Apellido Paterno</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="paterno" placeholder="Apellido Paterno" class="form-control"  type="text">
    </div>
      <span class="error"></span>

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Apellido Materno</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="materno" placeholder="Apellido Materno" class="form-control"  type="text">
  

    </div>
    <span class="error"></span>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Fecha Nacimiento</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="fecha" placeholder="dd-mm-Y" class="form-control date"  type="text" data-date-format="DD/MM/YYYY" value="01-01-1980">

    </div>
  <span class="error"></span>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Ingreso Anual</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  

  <input name="sueldo" placeholder="Ingreso Anual" class="form-control"  type="number" step="any">
    </div>
    <span class="error"></span>
  </div>
</div>


<!-- Success message -->
<div class="alert alert-success hide" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="button" class="btn btn-warning registrar" >Registrar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>

  
    @stop