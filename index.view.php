<?php
require_once "./partials/header.view.php";
?>

<h1 class="text-3xl font-bold">Recommended Books</h1>

<?php foreach (
    $books as $title => $author
): ?>
    <div class="text-center">
        <h2 class="text-lg font-bold"><?php echo $title . "<sup><small class='text-xs'>tm</small></sup>"; ?></h2>
        <p>by <?php echo $author; ?></p>
    </div>
<?php endforeach; ?>

<p class="text-red-500 text-center">
    <?php foreach ($gratitude as $w): ?>
        <span><?= $w; ?></span>
    <?php endforeach ?>
</p>

<?php
require_once "./partials/footer.view.php";
?>