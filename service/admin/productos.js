$( document ).ready(function() {
    console.log( "ready home!" );
    cargalistaMarcas().then(function (result) {
        htmlBuildListMarcad(result.data)
    })
    cargalistaCategorias().then(function (result) {
        htmlBuildListCategoria(result.data);
    })

    cargaProductosDatatable();
});

function cargaProductosDatatable() {
    $('#tblProductos').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"../webhook/admin_listaProductos.php",
                "data": {
                    "filtro": 0
                },
                "type": "POST"
            },
        "order": [[ 1, 'asc' ]],
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('idProducto', data.id_producto);
        },
        "columns":
            [
                { data: null,
                    render: function ( data, type, row ){
                        let barcode = row.barcode===""?"":`<br><i class="fas fa-barcode"></i> `+row.barcode;
                        let CODE = `SKU: ${row.sku} ${barcode}`;
                        return CODE;
                    }
                },
                { data: 'categoria'},
                { data: 'marca'},
                { data: 'nombre'},
                { data: 'presentacion'},
                { data: null,
                    render: function ( data, type, row ){
                    let descuento = parseFloat(row.descuento);
                    let costo = parseFloat(row.costo_promedio);
                    let total = costo - descuento;
                    let antes = descuento > 0 ? `<span class="text-decoration-line-through fw-light small text-muted">$ ${costo}</span>   ` : "";
                        let template = antes+ ` <span class="fw-bold">$ ${total}</span> `;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let min = parseFloat(row.min_alerta);
                        let stock = parseFloat(row.stock);
                        let template = stock <= min ? `<span class="fw-bold text-danger">${stock}</span>` : `${stock}`;
                        template += `<span type="button" class="btn"><i class="fas fa-plus text-success"></i></span>`;

                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let blobo = parseInt(row.n_fotos)>0 ? `<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary small">${row.n_fotos}<span class="visually-hidden">unread messages</span></span>`:"";
                        let template = `<button type="button" data-bs-toggle="modal" data-bs-target="#modalNewProduct" data-bs-id="${row.id_producto}" 
                                            data-bs-action="Actualizar" class="btn" onClick="loadInfoProdcuto(${row.id_producto});"><i class="fas fa-edit"></i></button>
                                          <button type="button" class="btn position-relative"data-bs-toggle="modal" data-bs-target="#modal_fotos" onClick="loadFotos(${row.id_producto})"><i class="fas fa-images"></i>
                                          ${blobo}
                                        </button>
                                          `;
                        return template;
                    }
                },
            ],
        "order": [[0, "asc" ]],
        "language": {
            "search": '<i class="fas fa-search"></i> ',
            "lengthMenu": "Mostrar _MENU_ productos por página",
            "zeroRecords": "No hay cursos registrados",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Se filtro de _MAX_ cursos en total)",
            "decimal": ".",
            "thousands": ",",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    } );

    //Evita el alert del warning
    $.fn.dataTable.ext.errMode = 'none';

    dataTable = $("#tblCursos").DataTable({
        "columnDefs": [
            {
                "targets": [7],
                "visible": false
            }
        ]
    });
}

function htmlBuildListMarcad(MARCAS) {
    let template = "";
    MARCAS.forEach((marca)=>{
        template+= `<option value="${marca.id_marca}">${marca.marca}</option>`;
    });
    $("#listMarcas").html(template);
}

function htmlBuildListCategoria(CATEGORIAS) {
    let template = "";
    CATEGORIAS.forEach((cat)=>{
        template+= `<option value="${cat.id_categoria}">${cat.categoria}</option>`;
    });
    $("#listCategorias").html(template);
}

function loadInfoProdcuto(idProducto) {
    cargaInfoProducto(idProducto,"none").then(function (result) {
        let prod = result.data[0].producto;
        $("#listCategorias").val(prod.id_categoria)
        $("#listMarcas").val(prod.id_marca)
        $("#sku").val(prod.sku)
        $("#BarCode").val(prod.barcode)
        $("#nombre").val(prod.nombre)
        $("#descripcion").val(prod.descripcion)
        $("#almacenMinimo").val(prod.min_alerta)
        $("#listPresentacion").val(prod.presentacion)
        $("#costo").val(prod.costo_promedio)
        $("#descuento").val(prod.descuento)
    })
}

function loadFotos(idProducto) {
    cargaFotosProducto(idProducto).then(function (response) {
        $("#id_produto_foto").val(idProducto);
        let template = "";
        if (response.numRows>0){
            template = `<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">`;
            let fotos = response.data;
            let cont = 0;
            fotos.forEach((foto)=>{
                let active = cont == 0 ? "active": "";
                    cont ++
                template+= `<div class="carousel-item ${active}">
                                <img src="${foto.path}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                        <button type="button" class="btn btn-danger" onClick="removeImage(${foto.id_imagen});">Eliminar</button>
                                </div>
                           </div>`;
            });
            template+= `</div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>`;
        }
        else{
            template = `<div class="alert alert-danger w-100" role="alert">
                          No se encontraron fotos del producto
                        </div>`;
        }
        $("#myFotosGalery").html(template);
    })
}

var exampleModal = document.getElementById('modalNewProduct')
exampleModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var action = button.getAttribute('data-bs-action')
    $('#frm_producto')[0].reset();
    // Update the modal's content.
    var modalTitle = exampleModal.querySelector('.modal-title')
    var modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = action+ ' producto'
    modalBodyInput.value = recipient
})


/*SUBMINT de Add UPDATE PRODUCTO*/
$("#frm_producto").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "../webhook/admin_producto_add_update.php",
        data: $('#frm_producto').serialize(),
        dataType: "json",
        success: function (result) {
            console.log(result)
            $("#modalNewProduct").modal('hide');
            if(result.response===1){
                $('#frm_producto')[0].reset();
                var table = $('#tblProductos').DataTable( {
                    ajax: "data.json"
                } );
                table.ajax.reload( null, false );
                notificacion('success',result.mensaje);
            }
            else{
                alert("ERROR");
            }
        },
        error: function(result){
            alert(result);
        }
    })
});

function removeImage(id) {
    alert("REMOVER" + id)
}


/*ASYNC FUNCTIONS*/
async function cargalistaMarcas() {
    return await simplePeticionAjax("../webhook/listaMarcas.php");
}

/*ASYNC FUNCTIONS CATEGORIA */
async function cargalistaCategorias() {
    return await simplePeticionAjax("../webhook/listaCategorias.php");
}
/*ASYNC FUNCTIONS CATEGORIA */

async function cargaInfoProducto(id,filtro) {
    return await peticionDataAjax("../webhook/producto_info.php",{id:id, filtro:filtro});
}


async function cargaFotosProducto(id) {
    return await peticionDataAjax("../webhook/producto_images.php",{id:id});
}

/*Peticion General de Ajax sin Parametros*/
async function simplePeticionAjax(route) {
    return $.ajax({
        url: route,
        type: 'POST',
        dataType: "json",
        error: function(error) {
            console.log(error);
            alert("Error interno");
        }
    });
}

async function peticionDataAjax(route,data) {
    return $.ajax({
        url: route,
        data: data,
        type: 'POST',
        dataType: "json",
        error: function(error) {
            console.log(error);
            alert("Error interno");
        }
    });
}
