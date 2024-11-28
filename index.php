<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesion de cURL;  ch = cURL handle
$ch = curl_init(API_URL);

/* Indicamos que queremos recibir el resultado de la peticion, 
pero sin mostrarla en pantalla */
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutamos la peticion y guardamos el resultado
$result = curl_exec($ch);

//Transformamos el Json del resultado
$data = json_decode($result, true);

// Cerrar la conexion de cURL
curl_close($ch);

// Mostamos los resultados
// var_dump($data);


?>


<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="La proxima pelicula de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" 
    />

    <link rel="stylesheet" href="style.css">
    <title>La próxima película de Marvel </title>
</head>

<main>
<!-- 
    <pre style="font-size: 11px; overflow: scroll; height: 200px;">
        <?= var_dump($data) ?>
    </pre> -->

    <h2>La próxima película de Marvel</h2>
    <section>
        <img src="<?= $data["poster_url"]; ?>" alt="poster de" <?= $data["title"]; ?> >
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> Se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente pelicula es: 
            <a href="https://whenisthenextmcufilm.com/?date=<?= $data["release_date"] ?>"><?= $data["following_production"]["title"] ?> </a>
        </p>
    </hgroup>
    

</main>




<!-- ESTILOS -->
<style>



</style>