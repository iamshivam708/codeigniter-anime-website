<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row" align="center">
        <table class="table table-striped">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Japanese Title</th>
                <th>Story</th>
                <th>Genres</th>
                <th>Image</th>
                <th>Trailer</th>
                <th colpan="2">Action</th>
            </thead>
            <tbody>
                <?php foreach($movies as $anime){ ?>
                <tr>
                    <td><?= $anime['id'] ?></td>
                    <td><?= $anime['title'] ?></td>
                    <td><?= $anime['japanese_title'] ?></td>
                    <td><?= $anime['story'] ?></td>
                    <td><?= $anime['genres'] ?></td>
                    <td><img src=<?= base_url('/uploads/'.$anime['image']); ?>  height="100" width="100" /></td>
                    <td><?= $anime['trailer'] ?></td>
                    <td>
                        <a href=<?= 'update/'.$anime['id']; ?> class="btn btn-primary">Update</a>
                        <a href=<?= 'delete/'.$anime['id']; ?> class="btn btn-danger mt-2">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>

