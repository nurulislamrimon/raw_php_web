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

    <?php
    $books = [
        "To Kill a Mockingbird" => "Harper Lee",
        "1984" => "George Orwell",
        "Pride and Prejudice" => "Jane Austen",
        "The Great Gatsby" => "F. Scott Fitzgerald",
    ]
    ?>

    <?php foreach (
        $books as $title => $author
    ): ?>
        <div>
            <h2><?php echo $title . "<sup>tm</sup>"; ?></h2>
            <p>by <?php echo $author; ?></p>
        </div>
    <?php endforeach; ?>

    <?php
    $gratitude = [
        "Thanks ",
        "Mr."
    ]
    ?>

    <?php foreach ($gratitude as $w): ?>
        <span><?php echo $w; ?></span>
    <?php endforeach ?>
</body>

</html>