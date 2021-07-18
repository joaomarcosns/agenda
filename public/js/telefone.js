var count = 1;

// Add campo telefone
$("#add-telefone").click(function () {
    $("#telefone").append(
        '<div id="campo'+ count +'" class="d-flex flex-row-reverse bd-highlight"><div class="p-2 bd-highlight"><button id="' +
            count +
            '" type="button" class="btn btn-danger btn-sm btn-apagar"><i class="fa fa-minus"></i></button></div></div><div class="mb-3 " id="telefone"><div class="mb-3"><label for="" class="form-label">DDD<sup class="text-danger">*</sup></label><input type="text" class="form-control" aria-label="Recipients username" aria-describedby="basic-addon2" id="ddd" name="ddd[]"></div><div class="mb-3"><label for="" class="form-label">Numero<sup class="text-danger">*</sup></label><input type="text" class="form-control" id="numero" name="numero[]"></div></div>'
    );
});

// Remover campo telefone

$("form").on("click", ".btn-apagar", function () {
    var button_id = $(this).attr("id");
    $("campo" + button_id + "").remove();
});