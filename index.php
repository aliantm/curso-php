<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutamos la peticion 
y guardamos el resultado
*/
$result = curl_exec($ch);

// alternativa usar file_get_contents
// $result = file_get_contents(API_URL);
$data = json_decode($result, true);
curl_close($ch);



?>
<head>
    <meta charset = "UTF-8" />
    <title> La proxima pelicula de Marvel </title>
    <meta name="description" content="La proxima pelicula de Marvel" />
    <link
     rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <section>
     <img src="<?= $data["poster_url"];?>" width="400" alt="Poster de <?= $data["title"];?>"
     style= "border-radious: 16 px" /> 
    </section>

    <hgroup>
        <h3> <?= $data["title"];?> se estrena en <?= $data["days_until"];?> dias</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark ;
    }

    body { 
        display: grid;
        place-content: center;
    }
    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

</style>
