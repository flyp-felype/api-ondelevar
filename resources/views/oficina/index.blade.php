@extends('layouts.app')

@section('content')


  <div class="row">
    <h4 class="">Oficinas</h4>
  </div>

  <div class="divider"></div>
  <br>

  <div class="row">
    <a href="{{URL::asset('/admin/oficina/create')}}" class="waves-effect waves-light btn indigo darken-4"><i class="material-icons left">add</i>Nova Oficina</a>
    <br>

    <table class="striped bordered responsive-table">
      <thead>
        <tr>
          <th>OFICINA</th>
          <th>CIDADE</th>
          <th>UF</th>
          <th>OPÇÕES</th>
        </tr>
      </thead>

      <tbody>
        @if($oficina != null)
          @foreach($oficina as $oficinas)
            <tr id="id-{{$oficinas->id}}">
              <td>{{$oficinas->nome}}</td>
              <td>{{$oficinas->cidade}}</td>
              <td>{{$oficinas->uf}}</td>
              <td>
                <a href="#" onclick="DeleteOficina({{$oficinas->id}})" class="red-text"> <i class="material-icons">delete_forever</i></a>
                <a href="/admin/oficina/{{$oficinas->id}}/edit" class="blue-text"> <i class="material-icons">mode_edit</i></a>
              </td>
            </tr>
          @endforeach
        @endif

      </tbody>
    </table>

  </div>


@stop
