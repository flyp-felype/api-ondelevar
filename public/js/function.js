$(document).ready(function () {

    $('select').material_select();
    $('.datepicker').pickadate({
        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Pronto',
        labelMonthNext: 'Próximo mês',
        labelMonthPrev: 'Mês anterior',
        labelMonthSelect: 'Selecione um mês',
        labelYearSelect: 'Selecione um ano',
        selectMonths: true,
        selectYears: 15
    });

    //tirando o checked quando marcar
    $("#debito").click(function () {

        if ($(this).is(':checked')) $("#estorno").prop('checked', false);
    });

    $("#estorno").click(function () {

        if ($(this).is(':checked')) $("#debito").prop('checked', false);
    });
    //tirando o checked quando marcar

});


//exemplo de uso
// var response = my_ajax(request, "SubmitDevolucao", "devolucaoData", false);

function sendajax(method, dataSend, url) {

    return new Promise((resolve, reject) => {

        load();
        let xhr = new XMLHttpRequest();

        xhr.open(method, url, true);
        xhr.onload = () => {

            if (xhr.status == 200 && xhr.readyState == 4) {
                console.log(xhr);
                var lancamento = JSON.parse(xhr.responseText);
                resolve(lancamento);
                Endload();

                }else if(xhr.status == 400){
                    reject(JSON.parse(xhr.responseText));
                }
                else {
                reject(JSON.parse(xhr.responseText));
                Endload();
            }

        }
        if (dataSend == null) {
            xhr.send();
        }
        else {

            xhr.send(dataSend);
        }

    });

}

function load() {
    $(".load").removeClass("hidden");
}
function Endload() {
    $(".load").addClass("hidden");
}

function MensagemSucesso(mensagem) {
    $(".msg").addClass("success");
    $(".msg").removeClass("hidden");

    $(".msg").text(mensagem);
    Materialize.toast(mensagem, 4000, 'rounded')

}

function MensagemErro(mensagem) {
    $(".msg").addClass("error");
    $(".msg").removeClass("hidden");

    $(".msg").text(mensagem);
    Materialize.toast(mensagem, 4000, 'rounded')

}

function DateHelper(data) {

    function pad(s) { return (s < 10) ? '0' + s : s; }

    var d = new Date(data);

    return [pad(d.getDate()), pad(d.getMonth() + 1), d.getFullYear()].join('/');
}



function retornarFuncionario() {

    let cpf = document.querySelector("input#cpf");
    let formulario = document.querySelector("#formfuncionario");
    if (cpf.value == "") {
        MensagemErro("Favor inserir o CPF");
        return false;
    }
    let data = new FormData(formulario);

    sendajax("POST", data, "/Credito/Buscar")
        .then(funcionario => {

            let btn = document.querySelector(".btn-floating");
            btn.classList.remove("pulse");
            var datafuncionario = JSON.parse(funcionario);
            cpf.setAttribute("disabled", "disabled");
            btn.classList.add("disabled");

            montarListaFuncionario(datafuncionario);
        })
        .catch(erro => {

            MensagemErro(erro);
            console.log(erro);
        });
}


function montarListaFuncionario(funcionario) {
    console.log(funcionario);
    let esconde = document.querySelector(".esconde");
    esconde.classList.remove("esconde");

    let nome = document.querySelector("#nome");
    let cpf = document.querySelector("#cpftxt");
    let empresa = document.querySelector("#empresa");
    let cidade = document.querySelector("#cidade");
    let dtdemissao = document.querySelector("#dtdemissao");
    console.log(cpf);

    nome.setAttribute('value', funcionario.NOME);
    cpf.setAttribute('value', funcionario.FUNC_CPF);
    empresa.setAttribute('value', funcionario.EMP);
    cidade.setAttribute('value', funcionario.CIDADE);
    if (funcionario.FUNC_DT_DEMISSAO == null) {
        dtdemissao.setAttribute('value', "");
    }
    else {
        dtdemissao.setAttribute('value', funcionario.FUNC_DT_DEMISSAO);
    }

}
