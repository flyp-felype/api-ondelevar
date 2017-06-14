@extends('layouts.app')

@section('content')

  <div class="row">
    <h4 class="">Cadastro Tipos de Oficina</h4>
  </div>

  <div class="divider"></div>
  <br>

  <div class="row">
    <form action="/tipo" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate" name="descricao">
          <label for="first_name">Descricao</label>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

      </div>

      <div class="col s12">
        <div class="row">
          <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>


@stop
