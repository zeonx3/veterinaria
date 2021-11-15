<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                </h3>

                {include file="../partials/_mensajes.tpl"}

                <table class="table table-hover">
                    <tr>
                        <th>Comuna:</th>
                        <td>{$comuna.nombre}</td>
                    </tr>
                    <tr>
                        <th>Región:</th>
                        <td>{$comuna.region}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}comunas/edit/{$comuna.id}"
                        class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="{$_layoutParams.root}comunas/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section -->