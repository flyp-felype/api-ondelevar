let formOficina = document.querySelector("#formOficina");
console.log(formOficina);
if(formOficina != null){

    formOficina.addEventListener("submit", function(event){
        event.preventDefault();
        let dadosFormulario = document.querySelector("#formOficina");
        var data = new FormData(dadosFormulario);

        sendajax("POST", data, "/oficina")
        .then(sucesso => {

          retornoDaOficina();


            var nome = sucesso.nome;
            MensagemSucesso("Oficina " + sucesso.nome + " cadastrada com sucesso!");
        })
        .catch(erro => {
            MensagemErro(erro);
            console.log(erro);
        });

    });

}

function retornoDaOficina(){

  let step1 = document.querySelector("#step1");
  let step2 = document.querySelector("#step2");
  step1.querySelector("h4").classList.add("text-lighten-2");
  step2.querySelector("h4").classList.remove("text-lighten-2");

  let dadosFormulario = document.querySelector("#formOficina");
  let iconstep1 = step1.querySelector(".icon1-step1");
  let icons2tep1 = step1.querySelector(".icon2-step1");
  iconstep1.classList.add("hidden");
  icons2tep1.classList.remove("hidden")

  let iconstep2 = step2.querySelector(".icon1-step2");
  let icons2tep2 = step2.querySelector(".icon2-step2");
  iconstep2.classList.add("hidden");
  icons2tep2.classList.remove("hidden")


  dadosFormulario.reset();
  dadosFormulario.classList.add("hidden");

  let formstep2 = document.querySelector("#formstep2");
  formstep2.classList.remove("hidden");


  let idoficina = document.querySelector("#id");

  idoficina.value = sucesso.id;


}


function enviarFoto(){

  let formFoto = document.querySelector("#formstep2")
console.log(formFoto);
  let data = new FormData(formFoto);

  sendajax("POST", data, "/foto")
  .then(sucesso => {
        MensagemSucesso("Foto inserida com sucesso!");
        let resultado = document.querySelector("#resultado");
        resultado.innerHTML = ` <div class="col s6">
                                  <img src="/storage/${sucesso.name}" class="responsive-img" />
                                </div>
                                `;

        formFoto.reset();
  })
  .catch(erro => {
        MensagemErro(erro);
        console.log(erro);
    });

}


function finalizar(){
  load();
  MensagemSucesso("Cadastro Finalizado com sucesso!");

  setTimeout(function(){ window.location="/oficina"; }, 2000);

}


function DeleteOficina(id){

let valida = confirm("Deseja realmente excluir esta oficina?");

if(valida == true){
  let row = document.querySelector("#id-"+id);

  row.remove();

   sendajax("GET", null, "/oficina/delete/"+id)
          .then(sucesso => {
            var nome = sucesso.success;
             MensagemSucesso("Oficina deletada com sucesso!");
          })
          .catch(erro => {
              MensagemErro(erro);
              console.log(erro);
          });
}
else {
  return false;
}


}
