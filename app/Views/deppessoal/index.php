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
          <div class="title mb-2">
            <div class="icon"></div><strong>Folha de pagamento</strong>
          </div>
          <div class="number dashtext-1"><?php /*echo count($clientes);*/ ?></div>
        </div>

        <div class="text-right mt-1">

          <!-- Example single danger button -->
          <div class="btn-group">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle mt-3" data-toggle="dropdown" aria-expanded="false">
              Opções
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Controle da Folha Mensal</a>
              <a class="dropdown-item" href="#">Gerar competência</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Controle da Folha 13º Salário</a>
              <a class="dropdown-item" href="#">Gerar 13º Salário</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Implantaçao de clientes</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
          <div class="title mb-2">
            <div class="icon"></div><strong>Prontuário</strong>
          </div>
          <div class="number dashtext-1"></div>
        </div>

        <div class="text-right mt-1">
          <a href="#" class="btn btn-primary btn-sm mt-3">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
          <div class="title  mb-2">
            <div class="icon"></div><strong>Tarefas</strong>
          </div>
          <div class="number dashtext-1"></div>
        </div>

        <div class="text-right mt-1">
          <a href="#" class="btn btn-primary btn-sm mt-3">Acessar</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
          <div class="title mb-2">
            <div class="icon"></div><strong>Controle de férias</strong>
          </div>
          <div class="number dashtext-1"></div>
        </div>

        <div class="text-right mt-1">
          <a href="#" class="btn btn-primary btn-sm mt-3">Acessar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5">
      <div class="block">
        <div class="card-title">
          <p>Perícias</p>
          <div class="card-body">
            texto aqui
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="block">
        <div class="card-title">
          <p>Tarefas</p>
        </div>
        <div class="card-body">
          texto aqui
        </div>
        <div class="">
          <a href="#" class="text-warning">Acessar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="block">
    <div class="card-title">
      <p>últimos prontuários</p>
      <div class="card-body">
        texto aqui
      </div>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>