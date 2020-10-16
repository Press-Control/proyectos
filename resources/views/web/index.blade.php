@extends('web.farmacia.esqueleto')


  <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <p>Estimado  Solicitante.</p>
          </div>
          <div class="col-6">
            <input class="controls" type="text" id="correo" placeholder="Folio">
          </div>
        </div>
      </div>

      <input class="controls" type="text" id="nombres" placeholder="Constructor, Proveedor, Prestador de servicios, Estudiante"
      style="">
      <input class="controls" type="text" id="apellidos" placeholder="Delegación o Entidad">

<style type="text/css">
  #nombres {
width: 290px;
  }
</style>

      <br>
      <input class="controls" type="text" id="correo" placeholder="Nombre" style="margin-right: -3px; margin-left: -3px;">
      <input class="controls" type="text" id="correo" placeholder="Apellido Paterno" style="margin-right: -3px; margin-left: -3px;">
      <input class="controls" type="text" id="correo" placeholder="Apellido Materno" style="margin-right: -3px; margin-left: -3px;">
      <br>

      <input class="controls" type="text" id="nombres" placeholder="Razón Social"
      style="width: 290px; text-align: center;">

      <input class="botons" type="submit" value="Registrar">
  </div>