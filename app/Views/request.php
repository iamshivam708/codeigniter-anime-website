<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 px-5 py-5">
    <h3 class="text-center">Request An Anime</h3>
    <form name="createForm" id="createForm" method="post">
    <div class="form-group mt-3">
        <label>Name</label>
        <input type="text" placeholder="Name" name="name" id="name" class="form-control" value="<?= set_value('name') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Email</label>
        <input type="text" placeholder="Email" name="email" id="email" class="form-control" value="<?= set_value('email') ?>" />
    </div>
    <div class="form-group mt-3">
        <label>Anime Name</label>
        <input type="text" placeholder="Anime Name" name="anime_name" id="anime_name" class="form-control" value="<?= set_value('anime_name') ?>" />
    </div>
    <button type="submit" class="btn btn-primary mt-3">Request</button> 
</form>
</div>

<?= $this->endSection(); ?>
