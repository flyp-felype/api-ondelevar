@extends('layouts.app')

@section('content')
  <div class="row">
    <h4 class="">Tipos de Oficina</h4>
  
  </div>
        
  <div class="divider"></div>
  <br>
<a href="{{URL::asset('tipo/create')}}" class="waves-effect waves-light btn indigo darken-4"><i class="material-icons left">add</i>Novo Tipo</a>
<br>


<table class="striped bordered responsive-table">
        <thead>
          <tr>
              <th>Descrição</th>
              <th>Options</th>              
          </tr>
        </thead>

        <tbody>
        @if($tipo != null)
            @foreach($tipo as $tipos)
            <tr id="id-{{$tipos->idtipos}}"> 
                <td>{{$tipos->descricao}}</td>
                <td><a href="#" onclick="DeleteTipo({{$tipos->idtipos}})" class="red-text"> <i class="material-icons">delete_forever</i></a></td>
            </tr>
            @endforeach
        @endif          
        
        </tbody>
      </table>
            


@stop
