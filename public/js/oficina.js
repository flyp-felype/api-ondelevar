let formOficina = document.querySelector("#formOficina");
console.log(formOficina);
if(formOficina != null){

    formOficina.addEventListener("submit", function(event){
        event.preventDefault();
        let dadosFormulario = document.querySelector("#formOficina");
        var data = new FormData(dadosFormulario);

        sendajax("POST", data, "/oficina")
        .then(sucesso => {

            let step1 = document.querySelector("#step1");
            let step2 = document.querySelector("#step2");
            step1.querySelector("h4").classList.add("text-lighten-2");
            step2.querySelector("h4").classList.remove("text-lighten-2");

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

            formstep2.addEventListener("submit", function(event){

            })

            var nome = sucesso.nome;
            MensagemSucesso("Oficina " + sucesso.nome + " cadastrada com sucesso!");
        })
        .catch(erro => {
            MensagemErro(erro);
            console.log(erro);
        });

    });

}
