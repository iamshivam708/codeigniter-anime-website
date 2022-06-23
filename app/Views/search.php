<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h3 class="text-center">Searched Result for <?= $query; ?></h3>
    
        <div class="mt-3 row g-3">
            <div class="col-12 col-md-4">
                <div class="row">
                    <?php foreach($search as $sch){ ?>
                    <div class="col">
                        <div class="card">
                            <a href=<?= "/single/".$sch['id'] ?>><img src="<?= base_url('/uploads/' . $sch['image']) ?>" class="bd-placeholder-img card-img-top" width="100%" height="300" /></a>

                            <div class="card-body">
                                <h4 class="card-text "><?= $sch['title'] ?> <span class="lead">(<?= $sch['japanese_title'] ?>)</span></h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Total Seasons: <?= $sch['seasons'] ?></p>
                                    <p>Episodes: <?= $sch['episodes'] ?></p>
                                </div>
                                <p>Genres: <?= $sch['genres'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <div class="row">
                    <?php foreach($searchMovie as $sch){ ?>
                    <div class="col">
                        <div class="card">
                            <a href=<?= "/single/movie/".$sch['id'] ?>><img src="<?= base_url('/uploads/' . $sch['image']) ?>" class="bd-placeholder-img card-img-top" width="100%" height="300" /></a>

                            <div class="card-body">
                                <h4 class="card-text "><?= $sch['title'] ?> <span class="lead">(<?= $sch['japanese_title'] ?>)</span></h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Total Seasons: <?= $sch['seasons'] ?></p>
                                    <p>Episodes: <?= $sch['episodes'] ?></p>
                                </div>
                                <p>Genres: <?= $sch['genres'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
                </div>
            </div>
            
        </div> 
        
</div>


<?= $this->endSection(); ?>