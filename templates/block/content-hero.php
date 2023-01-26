<?php
/**
 * Block Name: Hero
 *
 */

//variables
$title = get_field('title');
$description = get_field('description');

?>

<section class="section hero">
    <div class="container">
        <h1 class="hero__title"><?= $title ?></h1>
        <p class="hero__description"><?= $description ?></p>
    </div>
</section>