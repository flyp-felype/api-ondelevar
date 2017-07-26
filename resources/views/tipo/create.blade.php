@extends('layouts.app')

@section('content')

  <div class="row">
    <h4 class="">Cadastro Tipos de Oficina</h4>
    <a href="{{URL::asset('admin/tipo')}}"> <i class="material-icons">undo</i> Voltar</a>
  </div>

  <div class="divider"></div>
  <br>

  <div class="row">

    <form action="#" method="post" id="tiposForm">
      <div class="row">
        <div class="input-field col s12">
          <input id="descricao" type="text" class="validate" name="descricao">
          <label for="descricao">Descricao</label>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

      </div>

      <div class="col s12">
        <div class="row">
          <button class="btn waves-effect waves-light indigo darken-4" type="submit">Enviar
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>

  </div>


@stop
