$( document ).ready(function() {
    console.log("DETALLE PEDIDO" + ID_PEDIDO);
    consultaPedido();
});

function consultaPedido() {
    cargaPedidosCliente(ID_PEDIDO).then(function (result){
        console.log(result);
        let PEDIDO = result.data[0];
        console.log(PEDIDO);
        let info = PEDIDO.infoPedido;
        htmlInfoPedido(info);
        let productos = PEDIDO.productos;
        htmlTblProductos(productos);
    });
}

function htmlInfoPedido(info){
    console.log(info);
    let envioGratis = parseFloat(info.total) > 500 ? "Envio <small>(Envio Gratis Por Promoción)</small>":"Envio";
    $("#lblTextEnvio").html(envioGratis);
    $("#lblIdPedido").html(info.id_venta_pedido);
    $("#lblFecha").html(info.create_at);
    $("#lblSubtotal").html("$ "+info.subtotal);
    $("#lblIva").html("$ "+info.iva);
    $("#lblEnvio").html("$ "+info.costo_envio);
    $("#lblTotal").html("$ "+(parseFloat(info.total)+parseFloat(info.costo_envio)).toFixed(2));
}

function htmlTblProductos(productos){
    let template = ``;
    productos.forEach(p=>{
        console.log(p);
        template += `<tr>
                        <th class="order-table__product" scope="row">
                            ${p.nombre} - ${p.marca} <br> ${p.descripcion}
                        </th>
                        <td data-label="SKU">${p.sku}</td>
                        <td class="text-right" data-label="Precio">$ ${p.precio_vta}</td>
                        <td class="text-right" data-label="Precio">$ ${p.descuento}</td>
                        <td class="text-right" data-label="Cantidad">${p.cantidad}</td>
                        <td class="text-right" data-label="Total">$ ${(parseFloat(p.precio_vta)-parseFloat(p.descuento))*parseFloat(p.cantidad)}</td>
                    </tr>`;
    })

    $("#contanerProductos").html(template);
}