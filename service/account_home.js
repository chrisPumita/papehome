$( document ).ready(function() {
    console.log("PEDIDOS");
    cargaPedidos();
    muestraCategoriasAccount();
});

function cargaPedidos() {
    cargaPedidosCliente(0).then(function(response){
        let PEDIDOS = response.data;
        let template = ``;
        PEDIDOS.forEach(pedido=>{
            let info = pedido.infoPedido;
            template += `<tr>
                                <th scope="row">#${info.id_venta_pedido}</th>
                                <td>${info.create_at}</td>
                                <td>${info.forma_pago}</td>
                                <td>${info.estatus_envio}</td>
                                <td>$${parseInt(info.total) +parseInt(info.costo_envio) }</td>
                                <td>
                                    <a href="./order.php?idPedido=${info.id_venta_pedido}" type="button" class="btn btn-primary">Ver</a>
                                </td>
                            </tr>`;
        });
        $("#containerPedidos").html(template);
    })
}

function muestraCategoriasAccount() {
    //containerCategorias
    cargaCategorias("../").then(function (result) {
        let categorias = result.data;
        console.log(categorias);
        let template = ``;
        categorias.forEach(cat=>{
            console.log(cat);
            template += `<li><a class="dropdown-item" href="../search.php?cat=${cat.categoria}&keword=none&off=none">${cat.categoria}</a></li>`;
        })
        $("#containerCategorias").html(template);
    })
}