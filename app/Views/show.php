<?php $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<!--carousel-->
<?= $this->include('widget/carousel') ?>

<!--Latest Anime-->
<?= $this->include('widget/latest') ?>

<!--owl carousel-->
<?= $this->include('currently_airing') ?>

<?= $this->endSection(); ?>
