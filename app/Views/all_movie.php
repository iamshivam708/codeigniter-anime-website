<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <h3 class="text-center">All Latest Anime Movies</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($movies as $anime){ ?>
            <div class="col">
                <div class="card" style="height:430px">
                    <a href=<?= "/single/movie/".$anime['id'] ?>><img width="100%" height="250" src="<?= base_url('/uploads/' . $anime['image']) ?>" class="bd-placeholder-img card-img-top"  /></a>

                    <div class="card-body">
                        <h4 style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;" class="card-text"><?= $anime['title'] ?></h4>
                        <p style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;" class="card-text">(<?= $anime['japanese_title'] ?>)</p>
                        <p>Genres: <?= $anime['genres'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div> 
</div>


<?= $this->endSection(); ?>
