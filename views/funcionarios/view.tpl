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
                        <th>RUN:</th>
                        <td>{$funcionario.rut}</td>
                    </tr>
                    <tr>
                        <th>Nombre:</th>
                        <td>{$funcionario.nombre}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{$funcionario.email}</td>
                    </tr>
                    <tr>
                        <th>Dirección:</th>
                        <td>{$funcionario.direccion}</td>
                    </tr>
                    <tr>
                        <th>Comuna:</th>
                        <td>{$funcionario.comuna.nombre}</td>
                    </tr>
                    <tr>
                        <th>Región:</th>
                        <td>{$funcionario.comuna.region.nombre}</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td>{$funcionario.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td>{$funcionario.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}funcionarios/edit/{$funcionario.id}"
                        class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="{$_layoutParams.root}funcionarios/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section -->