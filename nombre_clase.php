<?php
namespace MiProyecto;

function obtener($nombre_clase)
{
    $a = __NAMESPACE__ . '\\' . $nombre_clase;
    return new $a;
}
?>