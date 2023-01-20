<?php
/**
 * Block Name: Hero
 *
 */

//variables
$title = get_field('title');
$description = get_field('description');

?>

<section class="section section-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="section-hero__title"><?= $title ?></h1>
                <p class="section-hero__description"><?= $description ?></p>
            </div>
        </div>
    </div>
</section>