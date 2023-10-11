<?php

session_start();

$generatedPassword = $_SESSION['generated_password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password strong</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="p-5 text-center bg-info">
    <h1>LA TUA PASSWORD GENERATA CASUALMENTE É:</h1>
    <h5 class="mb-5"><?= $generatedPassword?></h5>

    <a href="index.php"><button class="btn btn-primary">rigenera</button></a>
</body>
</html>