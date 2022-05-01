/*ASYNC FUNCTIONS*/
async function cargaProductosHome(id,filtro) {
    let ruta = "./webhook/producto_info.php";
    let data = {id:id, filtro:filtro};
    return await loadAsyncGeneral(ruta,data);
}

async function cargaProductosCarrito(filtro) {
    let ruta = "./webhook/loadCarrito.php";
    let data = {filtro:filtro};
    return await loadAsyncGeneral(ruta,data);
}

async function agregaProductoCarrito(idProducto,cantidad) {
    let ruta = "./webhook/addProductCart.php";
    let data = {idProducto:idProducto, cantidad:cantidad};
    return await loadAsyncGeneral(ruta,data);
}

async function loadAsyncGeneral(route,data) {
    return $.ajax({
        url: route,
        type: 'POST',
        data: data,
        dataType: "json",
        error: function(error) {
            console.log(error);
            alert("Error interno");
        }
    });
}