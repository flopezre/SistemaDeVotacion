<?php
    function insertarVotante( $conexion, $id, $nombre )
    {
        $sql = "INSERT INTO tbl_personas VALUES (".$id.", '".$nombre."')";
        // Ejecutamos la consulta (se devolverá true o false):
        return pg_query( $conexion, $sql );
    }
?>