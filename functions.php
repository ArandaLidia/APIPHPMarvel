<?php

declare(strict_types=1);

// Definir la URL de la API que queremos consultar


//Haciendo este método, se puede llamar al método, pasando por parámetro distintas url de distintas APIS
function get_data(string $url): array
{
    // Hacer una solicitud GET a la API utilizando la función file_get_contents
    $result = file_get_contents($url);
    // Decodificar el resultado JSON recibido de la API en un array asociativo
    $data = json_decode($result, true);
    // Ahora, la variable $data contiene los datos decodificados y listos para usar.
    return $data;
}


function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "Hoy se estrena!🥳 ",
        $days === 1 => "Mañana se estrena 🚀",
        $days < 7    => "Esta semana se estrena 🤫",
        $days < 30 => "Este mes se estrena... 📆",
        default => "$days días para el estreno 📆"
    };
}
