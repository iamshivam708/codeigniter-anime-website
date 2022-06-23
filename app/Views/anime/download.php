<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 px-5 py-5">
    <h3 class="text-center">Create An Anime</h3>
    <form name="createForm" id="createForm" method="post">

    <div class="form-group mt-3">
        <label>Anime Id</label>
        <input type="text" name="anime_id" id="anime_id" class="form-control" value="<?= set_value('anime_id') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Season</label>
        <input type="text" name="season" id="season" class="form-control" value="<?= set_value('season') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Episode</label>
        <input type="text" name="episode" id="episode" class="form-control" value="<?= set_value('episode') ?>" />
    </div>
        
    <div class="form-group mt-3">
        <label>Subbed Link</label>
        <input type="text" name="subbed_link" id="subbed_link" class="form-control" value="<?= set_value('subbed_link') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Dubbed Link</label>
        <input type="text" name="dubbed_link" id="dubbed_link" class="form-control" value="<?= set_value('dubbed_link') ?>" />
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button> 
</form>
</div>

<?= $this->endSection(); ?>

