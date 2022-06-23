<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row px-5 py-3">
        <object height="400px" data="<?= 'http://www.youtube.com/v/'.$single['trailer'] ?>" type="application/x-shockwave-flash">
            <param name="src" value="<?= 'http://www.youtube.com/v/'.$single['trailer'] ?>" />
        </object>
    </div>
    <div class="row mt-4" style="background:#fafafa">
        <div class="col-12 col-md-8 py-3">
            <h3 class="py-3 px-3" style="background:#eeeeee">Anime Details</h3>
            <div class="row px-4 py-4">
                <div class="col-12 col-md-6" style="height:300px;width:300px;">
                    <img src="<?= base_url('/uploads/' . $single['image']) ?>" width="100%" height="100%" />
                </div>
                <div class="col-12 col-md-6 mt-4">
                    <h3><?= $single['title'] ?></h3>
                    <p class="lead">(<?= $single['japanese_title'] ?>)</p>
                    <p>Genre: <?= $single['genres'] ?></p>
                    <p>Season: <?= $single['seasons'] ?></p>
                    <p>Episodes: <?= $single['episodes'] ?> </p>
                </div>
            </div>
            <div class="row mt-3 px-3">
                <h3 class="py-3 px-3" style="background:#eeeeee">Story</h3>
                <blockquote class="py-3 px-3"><?= $single['story'] ?></blockquote>
            </div>
            <div class="row mt-3 px-3">
                <h3 class="py-3 px-3" style="background:#eeeeee">Download links</h3>
                
                <div class="row px-3 py-3">
                    <h3 class="text-center">English Dubbed</h3>
                    <?php foreach($downloads as $dnd){ ?>
                    <div class="col-3 mt-2">
                        <a target="_blank" href="<?= $dnd['dubbbed_link'] ?>" class="btn btn-danger">episode<?= $dnd['episode'] ?></a>
                    </div>
                    <?php } ?>
                </div>
                
                <div class="row px-3 py-3 mt-4">
                    <h3 class="text-center">English Subbed</h3>
                    <?php foreach($downloads as $dnd){ ?>
                    <div class="col-3 mt-2">
                        <a target="_blank" href="<?= $dnd['subbed_link'] ?>" class="btn btn-primary">episode<?= $dnd['episode'] ?></a>
                    </div>
                    <?php } ?>
                </div>
                
                
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <div class="row">
                <?= $this->include('right_sidebar/search.php') ?> 
            </div>
            <div class="row">
                <?= $this->include('right_sidebar/categories.php') ?> 
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <?= $this->include('similiar_anime.php') ?>
</div>

<?= $this->endSection(); ?>
