<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 px-5 py-5">
    <h3 class="text-center">Update Category</h3>
    
    <form action="<?= base_url('/admin/category/edit/'.$categories['id']) ?>" name="createForm" id="createForm" method="post">

        <div class="form-group mt-3">
            <label>Category</label>
            <input type="text" name="cat_name" id="cat_name" class="form-control" value="<?= set_value('cat_name',$categories['cat_name']) ?>" />
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button> 
    </form>
    
</div>

<?= $this->endSection(); ?>
