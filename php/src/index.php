<?php
$host = 'MySQL';
$user = 'root';
$pass = 'MYSQL_ROOT_PASSWORD';
$db = 'MY_DATABASE';

$conn = new mysqli($host, $user, $pass, $db);

$consulta = 'SELECT * FROM usuaris';

if ($result = $conn->query($consulta)) {
    while ($data = $result->fetch_object()) {
        $usuaris[] = $data;
    }
}

foreach ($usuaris as $usuari) {
    echo "USUARI: " . $usuari->nomusuari . " PWD: " . $usuari->password;
    echo "<br>";
}
?>
