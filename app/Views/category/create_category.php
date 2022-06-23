<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 px-5 py-5">
    <h3 class="text-center">Create Category</h3>
    
    <form name="createForm" id="createForm" method="post">

        <div class="form-group mt-3">
            <label>Category</label>
            <input type="text" name="cat_name" id="cat_name" class="form-control" value="<?= set_value('cat_name') ?>" />
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create</button> 
    </form>
    
</div>

<?= $this->endSection(); ?>

