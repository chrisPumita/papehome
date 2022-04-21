$( document ).ready(function() {
    console.log( "ready home!" );
});

function loadProductos() {
    listaProductos(0).then(function (result) {
        if(result.numRows>0){
            let template = ``;
        }
        else{


        }
    })
}

/*ASYNC FUNCTIONS*/
async function listaProductos(id) {
    return await listaProductosAjax(id);
}

async function listaProductosAjax(id) {
    return $.ajax({
        url: "../webhook/admin_listaProductos.php",
        type: 'POST',
        data:{id:id},
        dataType: "json",
        error: function(error) {
            console.log(error);
            alert("Error interno");
        }
    });
}