<?php
require("conf.php");

$fonte= $_GET['sources'];
$rota = $_GET['rota'];

$context = stream_context_create([
    'http' => [
        'ignore_errors' => true,
        'method'        => $method,
        'header'        => $headers
    ]
]);

$resposta = file_get_contents("$URL_BASE$rota?sources=$fonte&apiKey=$KEY_ACCESS",false,$context);
echo $resposta;

?>
