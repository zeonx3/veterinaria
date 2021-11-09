<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                </h3>
                {include file="../partials/_mensajes.tpl"}

                <p class="text-danger">Campos obligatorios *</p>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Nombre <span class="text-danger">*</span></label>
                        <input type="text" name="nombre" value="{$datos.nombre|default:""}" class="form-control" id="" aria-describedby="" placeholder="Nombre de la región">
                    </div>
                    <input type="hidden" name="enviar" value="{$enviar}">
                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                    <a href="{$_layoutParams.root}regiones/" class="btn btn-outline-primary">Volver</a>
                </form>
            </div>
        </div>
    </div>
</section> <!-- .section -->