<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn.PHP</title>
</head>

<body>
    <?php

    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $age = $_GET["age"];

    ?>
    <form method="get">

        First Name: <input type="text" name="firstName" value="<?= $firstName; ?>">
        Last Name : <input type="text" name="lastName" value="<?= $lastName; ?>">
        Age : <input type="text" name="age" value="<?= $age; ?>">
        <input type="submit" value="Save">
    </form>

    <?php
    echo $firstName . "</br>";
    echo $lastName . "</br>";
    echo $age . "</br>";
    echo "env " . $_ENV['dev'] . "</br>";
    echo "Header " . $_SERVER["HTTP_ACCEPT"] . "</br>";
    echo "SERVER_ADDR  = " . $_SERVER["REMOTE_PORT"] . "</br>";
    echo "PHP_SELF = " . $_SERVER["PHP_SELF"] . "</br>";;
    echo $_SERVER['SERVER_NAME'] . "</br>";
    $indicesServer = array(
        'PHP_SELF',
        'argv',
        'argc',
        'GATEWAY_INTERFACE',
        'SERVER_ADDR',
        'SERVER_NAME',
        'SERVER_SOFTWARE',
        'SERVER_PROTOCOL',
        'REQUEST_METHOD',
        'REQUEST_TIME',
        'REQUEST_TIME_FLOAT',
        'QUERY_STRING',
        'DOCUMENT_ROOT',
        'HTTP_ACCEPT',
        'HTTP_ACCEPT_CHARSET',
        'HTTP_ACCEPT_ENCODING',
        'HTTP_ACCEPT_LANGUAGE',
        'HTTP_CONNECTION',
        'HTTP_HOST',
        'HTTP_REFERER',
        'HTTP_USER_AGENT',
        'HTTPS',
        'REMOTE_ADDR',
        'REMOTE_HOST',
        'REMOTE_PORT',
        'REMOTE_USER',
        'REDIRECT_REMOTE_USER',
        'SCRIPT_FILENAME',
        'SERVER_ADMIN',
        'SERVER_PORT',
        'SERVER_SIGNATURE',
        'PATH_TRANSLATED',
        'SCRIPT_NAME',
        'REQUEST_URI',
        'PHP_AUTH_DIGEST',
        'PHP_AUTH_USER',
        'PHP_AUTH_PW',
        'AUTH_TYPE',
        'PATH_INFO',
        'ORIG_PATH_INFO'
    );
    echo '<table cellpadding="10">';
    foreach ($indicesServer as $arg) {
        if (isset($_SERVER[$arg])) {
            echo '<tr><td>' . $arg . '</td><td>' . $_SERVER[$arg] . '</td></tr>';
        } else {
            echo '<tr><td>' . $arg . '</td><td>-</td></tr>';
        }
    }
    echo '</table>';

    for ($i = 1; $i <= $age; $i++) {
        echo "<h1>Welcome to PHP $i </h1>";
    }
    ?>

</body>

</html>