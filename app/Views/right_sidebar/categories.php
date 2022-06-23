<div class="container mt-5 d-none d-sm-block " style="background: #eeeeee">
    <div class="row py-5 px-2" align="center">
        <h2 class="text-center mb-4">Genres</h2>
        <?php foreach($categories as $category){ ?>
        <div class="col-4 col-md-6">
            <a href="<?= '/anime/category/'.$category['cat_name']; ?>" class="nav-link" ><?= $category['cat_name'] ?></a>
        </div>
        <?php } ?>
    </div>
</div
