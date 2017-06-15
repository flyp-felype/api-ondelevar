let formOficina = document.querySelector("#formOficina");

if(formOficina != null){

    formOficina.addEventListener("submit", function(event){
        event.preventDefault();

        var data = new FormData(dadosFormulario);

        sendajax("POST", data, "/oficina")
        .then(sucesso => {            
            var nome = sucesso.nome;
            MensagemSucesso("Oficina " + sucesso.nome + " cadastrada com sucesso!");
        })
        .catch(erro => {
            MensagemErro(erro);
            console.log(erro);
        });

    });

}