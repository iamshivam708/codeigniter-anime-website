<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 px-5 py-5">
    <h3 class="text-center">Create An Anime</h3>
    <form enctype="multipart/form-data" name="createForm" id="createForm" method="post">
    <div class="form-group mt-3">
        <label>Image</label>
        <input type="file" name="image" id="image" class="form-control" value="<?= set_value('image') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= set_value('title') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Japanese Title</label>
        <input type="text" name="japanese_title" id="japanese_title" class="form-control" value="<?= set_value('japanese_title') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Episodes</label>
        <input type="text" name="episodes" id="episodes" class="form-control" value="<?= set_value('episodes') ?>" />
    </div>
        <div class="form-group mt-3">
        <label>Seasons</label>
        <input type="text" name="seasons" id="seasons" class="form-control" value="<?= set_value('seasons') ?>" />
    </div>
        <div class="form-group mt-3">
        <label>Story</label>
        <input type="text" name="story" id="story" class="form-control" value="<?= set_value('story') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Genres</label>
        <input type="text" name="genres" id="genres" class="form-control" value="<?= set_value('genres') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Trailer</label>
        <input type="text" name="trailer" id="trailer" class="form-control" value="<?= set_value('trailer') ?>" />
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button> 
</form>
</div>

<?= $this->endSection(); ?>
