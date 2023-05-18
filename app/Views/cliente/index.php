<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('caminho'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('conteudo'); ?>

<h5>sou a página de clientes</h5>
<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>