<?php

    require_once "headless-cms.php";

    $page = handle_request();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import the Client Side Router -->
    <!-- Remove this if you don't wish to use the client-side routing function of the Headless CMS -->
    <script defer src="/headless-cms-scripts/client-side-router.js"></script>

    <!-- Import Alpine JS -->
    <!-- Remove this if you don't wish to use Alpine JS across you webpages -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- If the title property is set, insert here. -->
    <?php $page->get_property('title') ?>

    <!-- If the description property is set, insert here. -->
    <?php $page->get_property('description') ?>

    <!-- If the og-image property is set, insert here. -->
    <?php $page->get_property('og-image') ?>

    <!-- If the favicon property is set, insert here. -->
    <?php $page->get_property('favicon') ?>



    <!-- Add stylesheet imports here -->



</head>
<body>


    <?php if($page->get_property('hide-heading')): ?>

        <header>

        </header>

    <?php endif; ?>



    <main>
        <!-- Insert the page content in here -->
        <?php echo $page->content; ?>
    </main>



    <?php if($page->get_property('hide-footer')): ?>

        <footer>

        </footer>

    <?php endif; ?>

</body>
</html>