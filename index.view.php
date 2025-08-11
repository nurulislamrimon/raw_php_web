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
    <h1>Recommended Books</h1>


    <?php foreach (
        $books as $title => $author
    ): ?>
        <div>
            <h2><?php echo $title . "<sup><small>tm</small></sup>"; ?></h2>
            <p>by <?php echo $author; ?></p>
        </div>
    <?php endforeach; ?>

    <p>
        <?php foreach ($gratitude as $w): ?>
            <span><?= $w; ?></span>
        <?php endforeach ?>
    </p>

    <p><?= simpleFn() ?></p>
</body>

</html>