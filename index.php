<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

// Inicializar una nueva sesión de cURL
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardamos el resultado
$result = curl_exec($ch);

// Verificar si ocurrió algún error en la petición

// Decodificar el resultado JSON
$data = json_decode($result, true);

/*<pre style="font-size: 10px; overflow:scroll; height:200px;">
        <?php var_dump($data); ?>
    </pre>
    Poner esto en el body para que aparezca el array asociativo*/

// Cerrar la sesión de cURL
curl_close($ch);
?>

<head>

    <meta charset="UTF-8">
    <meta name="description" content="La próxima película de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>La próxima película de MARVEL</title>
</head>

<main>
    <section>
        <h1>La próxima película de Marvel</h2>
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>La fecha de estreno es: <?= $data["release_date"]; ?></p>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="poster de">
        <p>La siguiente película es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>



</main>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        color-scheme: ligth dark;
    }

    body {
        display: flex;
        /* Activa el modelo de Flexbox */
        justify-content: center;
        /* Centra horizontalmente */
        align-items: center;
        /* Centra verticalmente */
        min-height: 100vh;
        /*Altura del body es toda la ventana*/
        margin: 0;
        padding: 0;
        text-align: center;
    }

    section {

        text-align: center;
        justify-content: center;
        display: flex;

    }

    hgroup {
        flex-direction: column;
        text-align: center;
        justify-content: center;
        display: flex;
    }

    img {
        border-radius: 10%;
        margin: 0 auto;
    }
</style>