<?php
require_once "./views/partials/header.view.php";
?>
<main class="p-10">

    <h1 class="text-3xl font-bold">Services Page</h1>

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

</main>
<?php
require_once "./views/partials/footer.view.php";
?>