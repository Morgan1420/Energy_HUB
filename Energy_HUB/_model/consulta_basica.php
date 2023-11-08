<?php

$conn = pg_connect("host=127.0.0.1 dbname=tdiw-g7 user=tdiw-g7 password=_pKgzFUP");
// Pas 1: preparem la consulta.
$sql = "SELECT nom_producte FROM public.Producte";

// Pas 2: Enviem la query a la BBDD. La variable $conn és la definida al pas anterior.
$result = pg_query($conn, $sql);

// Pas 3: agafem els resultats de la consulta.
//$array_elements = pg_fetch_all($result);

?>