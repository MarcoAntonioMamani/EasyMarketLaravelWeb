
$(document).ready(function () {
    Cargar();
});
/*
 * Metodo para listar las ventas
 */
function Cargar() {
    debugger;
    $('#datos').empty();
    var route = "/listarPedidos";
    var token = $("#token").val();
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        success: function ($route) {
            var tabladatos = $('#datos');
            $($route).each(
                    function ($key, value) {
                        var estadop;
                        if (value.estado == "E") {
                            estadop = "ENVIADO";
                        } else {
                            estadop = "SIN ENVIAR"
                        }
                        tabladatos.append("<tr>" +
                                "<td>" + value.idPedido + "</td>" +
                                "<td>" + value.fecha + "</td>" +
                                "<td>" + value.cliente + "</td>" +
                                "<td>" + value.enviador + "</td>" +
                                "<td>" + estadop + "</td>" +
                                "<td>" + value.monto + "</td>" +
                                "</tr>");
                    });
            paginador();
        },
        error: function () {
            alert("Error al cargar los datos");
        }
    });
}

/*
 * Paginador de la tabla
 */
function paginador() {
    $('#tablacategoria').DataTable({
        "pagingType": "full_numbers",
        retrieve: true,
        "order": [0, "desc"],
        "lengthMenu": [[10, 20, 40, 60], [10, 20, 40, 60]]
    });
}
