/*ASYNC FUNCTIONS*/
async function cargaProductosHome(id,filtro) {
    return await cargaProductosHomeAjax(id,filtro);
}

async function cargaProductosHomeAjax(id,filtro) {
    return $.ajax({
        url: "./webhook/producto_info.php",
        type: 'POST',
        data:{id:id, filtro:filtro},
        dataType: "json",
        error: function(error) {
            console.log(error);
            alert("Error interno");
        }
    });
}