<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
            padding: 50px;
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = false;

    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have not read $name";
    } ?>

    <h1><?php echo $message ?></h1>
</body>

</html>