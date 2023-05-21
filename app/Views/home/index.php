<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('caminho'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('conteudo'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
          <div class="title">
            <div class="icon"><i class="icon-user-1"></i></div><strong>Clientes</strong>
          </div>
          <div class="number dashtext-1"><?php echo count($clientes); ?></div>
        </div>
        <div class="progress progress-template">
          <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
        </div>

        <div class="text-right mt-3">
          <a href="<?php echo site_url("clientes"); ?>" class="dashtext-1">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
          <div class="title">
            <div class="icon"><i class="icon-contract"></i></div><strong>Conteúdo</strong>
          </div>
          <div class="number dashtext-2">375</div>
        </div>
        <div class="progress progress-template">
          <div role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
        </div>
        <div class="text-right mt-3">
          <a href="#" class="dashtext-2">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
          <div class="title">
            <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Tarefas</strong>
          </div>
          <div class="number dashtext-3">140</div>
        </div>
        <div class="progress progress-template">
          <div role="progressbar" style="width: 100%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
        </div>
        <div class="text-right mt-3">
          <a href="#" class="dashtext-3">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
          <div class="title">
            <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Abertura empresa</strong>
          </div>
          <div class="number dashtext-4">41</div>
        </div>
        <div class="progress progress-template">
          <div role="progressbar" style="width: 100%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
        </div>
        <div class="text-right mt-3">
          <a href="#" class="dashtext-4">Acessar</a>
        </div>
      </div>
    </div>

  </div>
</div>
<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>