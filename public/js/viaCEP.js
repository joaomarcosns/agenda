$(document).ready(function () {
    function limpa_formulário_cep() {
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
    }
    $("#cep").blur(function () {
        var cep = $(this).val().replace(/\D/g, "");
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            if (validacep.test(cep)) {
                $("#cidade").val("...");
                $("#uf").val("...");
                $.getJSON(
                    "https://viacep.com.br/ws/" + cep + "/json/?callback=?",
                    function (dados) {
                        if (!("erro" in dados)) {
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            $("#estado").val(dados.uf);
                            $("#city").val(dados.localidade);
                        }
                        else {
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    }
                );
            }
            else {
                
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        }
        else {
            limpa_formulário_cep();
        }
    });
});
