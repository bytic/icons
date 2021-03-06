<?php
use ByTIC\Icons\Collections\CollectionsManager;require '../vendor/autoload.php';

$collection = \ByTIC\Icons\Icons::collection(CollectionsManager::FONT_AWESOME_SOLID);
$categorories = $collection->categories();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FA5 Solid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c7b8fd2281.js" crossorigin="anonymous"></script>
</head>
<body>

<main class="container" id="content" role="main">
    <div class="my-5">
        <div class="d-flex mb-4">
            <h2 id="icons" class="mb-0">Font Awesome 5 Solid Icons</h2>
        </div>

        <?php foreach ($categorories as $name=>$icons) { ?>
            <div class="d-flex mb-4">
                <h2 id="icons" class="mb-0">
                    <?php echo $name; ?>
                </h2>
            </div>

            <ul class="row row-cols-3 row-cols-sm-4 row-cols-lg-6 row-cols-xl-12 list-unstyled list">

                <?php foreach ($icons as $icon) { ?>
                    <li class="col mb-4" data-tags="alarm clock">
                        <a class="d-block text-dark text-decoration-none" href="">
                            <div class="p-3 py-4 mb-2 bg-light text-center rounded display-4">
                                <?php echo \ByTIC\Icons\Icons::show($icon); ?>
                            </div>
                            <div class="name text-muted text-decoration-none text-center pt-1">
                                <?php echo $icon; ?>
                            </div>
                        </a>
                    </li>
            <?php } ?>
                </ul>
        <?php } ?>
    </div>
</main>

</body>
</html>