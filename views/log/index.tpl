<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                    <a>Historial de Ingresos</a>
                </h3>
                {include file="../partials/_mensajes.tpl"}

                {if isset($logs) && count($logs)}
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>ID_Usuario</th>
                            <th>IP</th>
                            <th>Ultimo Ingreso</th>
                            <th>Ultima Salida</th>
                        </tr>
                        {foreach from=$logs item=log}
                            <tr>
                                <td>{$log.id}</td>
                                <td>{$log.id_usuario}</td>
                                <td>{$log.ip}</td>
                                <td>{$log.ingreso}</td>
                                <td>{$log.salida}</td>
                            </tr>
                        {/foreach}
                    </table>
                    <p>
                    <a href="{$_layoutParams.root}admin/" class="btn btn-outline-primary btn-sm">Volver</a>
                    </p>
                {else}
                    <p class="text-info">No hay registro</p>
                {/if}
            </div>
        </div>
    </div>
</section> <!-- .section -->