<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <h3 class="text-center">All Latest Anime Series</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($animes as $anime){ ?>
            <div class="col">
                <div class="card" style="height:430px">
                    <a href=<?= "/single/".$anime['id'] ?>><img width="100%" height="250" src="<?= base_url('/uploads/' . $anime['image']) ?>" class="bd-placeholder-img card-img-top"  /></a>

                    <div class="card-body">
                        <h4 style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;" class="card-text"><?= $anime['title'] ?> <span class="lead" >(<?= $anime['japanese_title'] ?>)</span></h4>
                        <p>Genres: <?= $anime['genres'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p>Season: <?= $anime['seasons'] ?></p>
                            <p>Episodes: <?= $anime['episodes'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div> 
</div>


<?= $this->endSection(); ?>
