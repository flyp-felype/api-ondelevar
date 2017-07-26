var formularioTipo = document.querySelector("#tiposForm");
if(formularioTipo != null){
formularioTipo.addEventListener('submit', function(e) {

  e.preventDefault();

  let dadosFormulario = document.querySelector("#tiposForm");

  var descricao = dadosFormulario.descricao;

  if (descricao.value == "") {
    MensagemErro("Favor escrever uma descrição");
    return false;
  }

  var data = new FormData(dadosFormulario);

     sendajax("POST", data, "/admin/tipo")
        .then(sucesso => {
          descricao.value = "";
          var nome = sucesso.nome;
           MensagemSucesso("Tipo " + sucesso.nome + " cadastrado com sucesso!");
        })
        .catch(erro => {
            MensagemErro(erro);
            console.log(erro);
        });

}, false);

}



function DeleteTipo(idTipos){

let row = document.querySelector("#id-"+idTipos);

row.remove();

 sendajax("GET", null, "/tipo/delete/"+idTipos)
        .then(sucesso => {
          var nome = sucesso.success;
           MensagemSucesso("Tipo deletado com sucesso!");
        })
        .catch(erro => {
            MensagemErro(erro);
            console.log(erro);
        });

}
