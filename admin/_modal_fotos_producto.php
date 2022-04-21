<!-- Modal -->
<div class="modal fade" id="modal_fotos" tabindex="-1" aria-labelledby="modal_fotosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_fotosLabel">Fotos del Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <!-- Swiper -->
                        <div style="--swiper-navigation-color: #4b4b50; --swiper-pagination-color: #4b4b50" class="swiper mySwiper" >
                            <div class="swiper-wrapper" id="mySwiperFotos">

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-12 py-3">
                        <h5>Subir Nueva Foto</h5>
                        <form id="frm_dube_foto">
                            <div class="input-group">
                                <input type="text" id="id_produto_foto">
                                <input type="file" class="form-control" id="imagenFoto" name="imagenFoto" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Subir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>