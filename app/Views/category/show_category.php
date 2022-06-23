<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 px-5 py-5">
    <h3 class="text-center">Show Category</h3>
    <a href="/admin/category/" class="btn btn-primary">add</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category){ ?>
            <tr>
                <td><?= $category['id']; ?></td>
                <td><?= $category['cat_name']; ?></td>
                <td>
                    <a href="<?= '/admin/category/edit/'.$category['id'] ?>" class="btn btn-primary">Update</a>
                    <a href="<?= '/admin/category/delete/'.$category['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>

