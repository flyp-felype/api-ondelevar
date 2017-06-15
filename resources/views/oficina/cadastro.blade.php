@extends('layouts.app')

@section('content')

<div class="row">
    <h4 class="">Cadastro de Oficina</h4>
</div>

<div class="divider"></div>
<br>

<div class="row">
    <form class="col s12" id="formOficina">
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="nome" type="text" class="validate" name="nome" required>
          <label for="nome">Nome da Oficina</label>
        </div>
        <div class="input-field col s12 m6">
        <input type="text" id="cep" name="cep" class="validate">
          <label for="cep">CEP</label>
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="endereco" type="text" name="endereco" class="validate">
          <label for="endereco">Endereço</label>
        </div>
        <div class="input-field col s12 m6">
           <input id="cidade" type="text" name="cidade" class="validate">
           <label for="cidade">Cidade</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select name="uf" id="uf">
            <option value="">Selecione...</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG">MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
        </select>
          <label for="uf">UF</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="telefone1" name="telefone1" type="text" class="validate">
          <label for="telefone1">Telefone</label>
        </div>
         <div class="input-field col s12 m6">
          <input id="telefone2" type="text" name="telefone2" class="validate">
          <label for="telefone2">Telefone 2</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="celular" type="text" name="celular" class="validate">
          <label for="celular">Celular</label>
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
