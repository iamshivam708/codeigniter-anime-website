<main>
    <div class="album py-5 bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row py-3 mb-3 px-5" style="background: #eeeeee;">
                        <div class="col-6">
                            <h3>Latest Anime Series</h3>
                        </div>
                        <div class="col-6" align="end">
                            <a href="/anime/all" class="btn btn-primary">See All</a>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        <?php foreach ($animes as $anime) { ?>
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
                    
                    <div class="row mt-5 py-3 mb-3 px-5" style="background: #eeeeee;">
                        <div class="col-6">
                            <h3>Latest Anime Movies</h3>
                        </div>
                        <div class="col-6" align="end">
                            <a href="/movie/all" class="btn btn-primary">See All</a>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        <?php foreach ($movies as $anime) { ?>
                            <div class="col">
                                <div class="card" style="height:500px">
                                    <a href=<?= "/single/movie/".$anime['id'] ?>><img width="100%" height="280" src="<?= base_url('/uploads/' . $anime['image']) ?>" class="bd-placeholder-img card-img-top"  /></a>

                                    <div class="card-body">
                                        <h4 style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;" class="card-text"><?= $anime['title'] ?></h4>
                                        <p style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;" class="card-text">(<?= $anime['japanese_title'] ?>)</p>
                                        <p>Genres: <?= $anime['genres'] ?></p>
                                        <p>Release Date: <?= $anime['release_date'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div> 
                    
                </div>
                <div class="col-sm-3 d-none d-sm-block mt-5">

                    <!-- search widget-->
                    <?= $this->include('right_sidebar/search') ?>

                    <!-- categories-->
                    <?= $this->include('right_sidebar/categories') ?>

                    <!-- upcoming-->
                    <?= $this->include('right_sidebar/upcoming') ?>
                </div>
            </div>




        </div>
       
        
    </div>

</main>
