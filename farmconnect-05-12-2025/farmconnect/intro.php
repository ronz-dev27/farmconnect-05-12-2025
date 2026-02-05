<?php
// intro.php - reusable page intro section
// Usage: set $intro_title and $intro_subtitle before including
if (!isset($intro_title)) $intro_title = 'FarmConnect';
if (!isset($intro_subtitle)) $intro_subtitle = '';
?>
<section class="page-intro" aria-hidden="false" style="background-image:url('assets/img/hero-farm.svg');background-size:cover;background-position:center;">
    <div class="page-intro-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="text-white fw-bold display-6"><?php echo $intro_title ?></h1>
                <?php if ($intro_subtitle): ?><p class="text-white small mt-2"><?php echo $intro_subtitle ?></p><?php endif; ?>
            </div>
        </div>
    </div>
</section>
