<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 px-5 py-5">
    <h3 class="text-center">Update An Anime</h3>
    <form action="<?= base_url('admin/edit/'.$anime['id']); ?>" enctype="multipart/form-data" name="createForm" id="createForm" method="post">
    <div class="row form-group mt-3">
        <div class="col-6" align="center">
            <img src=<?= base_url('/uploads/'.$anime['image']) ?> height="100" width="100" />
        </div>
        <div class="col-6">
            <label>Image</label>
            <input type="file" name="image" id="image" class="form-control" value="<?= set_value('image') ?>" />
        </div> 
    </div>
    <div class="form-group mt-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?= set_value('title',$anime['title']) ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Japanese Title</label>
        <input type="text" name="japanese_title" class="form-control" value="<?= set_value('japanese_title',$anime['japanese_title']) ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Episodes</label>
        <input type="text" name="episodes" class="form-control" value="<?= set_value('episodes',$anime['episodes']) ?>" />
    </div>
        <div class="form-group mt-3">
        <label>Seasons</label>
        <input type="text" name="seasons" class="form-control" value="<?= set_value('seasons',$anime['seasons']) ?>" />
    </div>
        <div class="form-group mt-3">
        <label>Story</label>
        <input type="text" name="story" class="form-control" value="<?= set_value('story',$anime['story']) ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Genres</label>
        <input type="text" name="genres" class="form-control" value="<?= set_value('genres',$anime['genres']) ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Trailer</label>
        <input type="text" name="trailer" class="form-control" value="<?= set_value('trailer',$anime['trailer']) ?>" />
    </div>
    <button type="submit" class="btn btn-primary mt-3">Update</button> 
</form>
</div>

<?= $this->endSection(); ?>
