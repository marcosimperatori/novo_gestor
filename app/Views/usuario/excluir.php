<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('caminho'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('conteudo'); ?>

<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="block">

      <div class="block-body">


        <?php echo form_open("usuarios/excluir/$usuario->id") ?>

        <div class="alert alert-warning" role="alert">
          Tem certeza que deseja excluir este usuário?
        </div>

        <div class="form-group mt-5 mb-2">
          <input id="btn-salvar" type="submit" value="Sim, continuar com a exclusão" class="btn btn-danger btn-sm mr-e">

          <a href="<?php echo site_url("usuarios/exibir/$usuario->id"); ?>" class="btn btn-secondary btn-sm ml-2">Cancelar</a>
        </div>
        <?php form_close() ?>
      </div>
    </div>
  </div>
</div>

<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<?php $this->endSection(); ?>