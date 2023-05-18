<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('caminho'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('conteudo'); ?>

<div class="row">
  <div class="col-lg-4">
    <div class="block">
      <div class="text-center">
        <?php if ($usuario->imagem == null) : ?>
          <img src="<?php echo site_url('recursos/img/user_sem_imagem.png') ?>" class="card-img-top" style="height: 180px; width: 150px;" alt="usuário sem imagem">
        <?php else : ?>
          <img src="<?php echo site_url("usuarios/imagem/$usuario->imagem") ?>" class="card-img-top" style="width: 90%;" alt="<?php echo esc($usuario->nome) ?>">
        <?php endif; ?>
        <br>
        <a href="<?php echo site_url("usuarios/editarimagem/$usuario->id") ?>" class="btn btn-outline-info btn-sm mt-3">Alterar imagem</a>
      </div>
      <hr class="border-secondary">

      <p class="card-text">Criado <?php echo $usuario->criado_em->humanize(); ?></p>
      <p class="card-text">Alterado <?php echo $usuario->atualizado_em->humanize(); ?></p>

      <!-- Example single danger button -->
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
          Ações
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo site_url("usuarios/alterarsenha/$usuario->id") ?>">Alterar senha</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Excluir</a>
          <a class="dropdown-item" href="<?php echo site_url("usuarios/editar/$usuario->id") ?>">Editar</a>
        </div>
      </div>
      <a href="<?php echo site_url('usuarios'); ?>" class="btn btn-secondary btn-sm ml-2">Voltar</a>
    </div>
  </div>

  <div class="col-lg-8">
    <div class="block">
      <div class="title">
        <strong class="d-block"><?php echo $usuario->nome; ?></strong>
      </div>
      <div class="block-body">

        <div class="form-group">
          <p class="card-text">Email: <?php echo $usuario->email; ?></p>
        </div>
        <div class="form-group">
          <p><?php echo ($usuario->ativo == true ? 'Ativo' : 'Inativo'); ?></p>
        </div>


      </div>
    </div>
  </div>
</div>

<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>