<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('caminho'); ?>
<?php $this->endSection(); ?>

<?php echo $this->section('conteudo'); ?>

<div class="block">
  <div class="row justify-content-center">

    <div class="form-group col-lg-2">
      <label class="form-control-label" for="codigo">Código</label>
      <input type="text" name="codigo" placeholder="Código" class="form-control" value="<?php echo ""; /*esc($usuario->nome);*/ ?>">
    </div>

    <div class="form-group col-lg-3">
      <label class="form-control-label">CNPJ</label>
      <input type="text" name="cnpj" placeholder="Insira o CNPJ" class="form-control cnpj" value="">
    </div>

    <div class="form-group col-lg-4">
      <label class="form-control-label">
        Tipo
        <a class="" data-toggle="popover" title="Tipo" data-content="Esta classificação servirá para filtrar clientes na listagem de clientes." style="cursor:pointer;"><i class="fa fa-question-circle-o text-info"></i></a>

      </label>

      <select class="form-control" id="exampleFormControlSelect1">
        <option value="nao" selected>Selecione</option>
        <option value="1">Simples Nacional</option>
        <option value="2">Isenta</option>
        <option value="3">Lucro Presumido</option>
        <option value="4">Lucro Real</option>
        <option value="5">MEI</option>
        <option value="6">Simples Nacional</option>
      </select>
    </div>

    <div class="form-group col-lg-3">
      <label class="form-control-label">Responsável pela empresa</label>
      <input type="text" name="empresario" placeholder="Responsável pela empresa" class="form-control" value="">
    </div>

    <div class="form-group col-lg-7">
      <label class="form-control-label">Razão social</label>
      <input type="text" name="razao" placeholder="Insira a razão social" class="form-control" value="">
    </div>

    <div class="form-group col-lg-5">
      <label class="form-control-label">Apelido</label>
      <input type="text" name="apelido" placeholder="Insira o apelido" class="form-control" value="">
    </div>

    <div class="form-group col-lg-4">
      <label class="form-control-label">Inscrição estadual</label>
      <input type="text" name="ie" placeholder="IE" class="form-control" value="">
    </div>

    <div class="form-group col-lg-4">
      <label class="form-control-label">Código Simples Nacional</label>
      <input type="text" name="codsimples" placeholder="Código do Simples" class="form-control" value="">
    </div>

    <div class="form-group col-lg-4">
      <label class="form-control-label">CPF responsável</label>
      <input type="text" name="cpf" placeholder="Insira o CPF" class="form-control cpf" value="">
    </div>

    <div class="form-group col-lg-3">
      <label class="form-control-label">Telefone</label>
      <input type="phone" name="empresario" placeholder="Insira o telefone da empresa" class="form-control sp_celphones" value="">
    </div>

    <div class="form-group col-lg-7">
      <label class="form-control-label">Email</label>
      <input type="email" name="empresario" placeholder="Insira o email da empresa" class="form-control" value="">
    </div>

    <div class="form-group col-lg-2">
      <label class="form-control-label text-success">Cliente desde</label>
      <input type="date" name="empresario" placeholder="Data admissão" class="form-control" value="">
    </div>

    <div class="form-group col-lg-4">
      <label class="form-control-label">Pessoa p/ contato</label>
      <input type="email" name="empresario" placeholder="Nome da pessoa para contato" class="form-control" value="">
    </div>

    <div class="form-group col-lg-3">
      <label class="form-control-label">Tipo Certificado Digital</label>

      <select class="form-control" id="exampleFormControlSelect1">
        <option value="nao" selected>Não possui</option>
        <option value="a1">A1</option>
        <option value="a3">A3</option>
      </select>
    </div>

    <div class="form-group col-lg-2">
      <label class="form-control-label"> Vecto Cert. Digital</label>
      <input type="date" name="codigo" placeholder="Código" class="form-control" value="<?php echo ""; /*esc($usuario->nome);*/ ?>">
    </div>

    <div class="form-group col-lg-3">
      <label class="form-control-label">Quantidade funcionários</label>
      <input type="text" name="codigo" placeholder="Qtde funcionários" class="form-control" value="<?php echo ""; /*esc($usuario->nome);*/ ?>">
    </div>

    <div class="form-group col-lg-4">
      <label class="form-control-label">Regime tributário</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option value="nao" selected>Selecione</option>
        <option value="1">Imune</option>
        <option value="2">Isenta</option>
        <option value="3">Lucro Presumido</option>
        <option value="4">Lucro Real</option>
        <option value="5">MEI</option>
        <option value="6">Simples Nacional</option>
      </select>
    </div>

    <div class="form-group col-lg-8">
      <div class="row">


      </div>
    </div>

    <div class="form-group col-lg-12">
      <label class="form-control-label">Observação</label>
      <textarea cols="30" rows="5" name="empresario" placeholder="Insira as observações da empresa" class="form-control" value=""></textarea>
    </div>
  </div>

  <div class="row">

    <div class="form-group ml-3 mr-5 mt-3">
      <input id="option" type="checkbox" value="">
      <label for="option">Ativo</label>
    </div>

    <div class="form-group mr-5 mt-3">
      <input id="option" type="checkbox" value="">
      <label for="option">Controla CND's</label>
    </div>

    <div class="form-group mt-3">
      <input id="option" type="checkbox" value="">
      <label for="option">Entrega movimento contábil</label>
    </div>
  </div>

  <div class="d-flex justify-content-end">
    <a href="#" class="btn btn-secondary btn-sm mr-3"> Cancelar</a>
    <a href="#" class="btn btn-success btn-sm"> Salvar</a>
  </div>



  <!-- <ul class="nav nav-tabs card-header-tabs" id="abasempresa" role="tablist">
    <li class="nav-item">
      <a class="nav-link tab active" href="#geral" role="tab" aria-controls="description" aria-selected="true">Geral</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tab" href="#dp" role="tab" aria-controls="history" aria-selected="false">Departamento Pessoal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tab" href="#df" role="tab" aria-controls="deals" aria-selected="false">Departamento Fiscal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tab" href="#dc" role="tab" aria-controls="deals" aria-selected="false">Departamento Contábil</a>
    </li>
  </ul>

  <div class="card-body">

    <div class="tab-content mt-3">
      <div class="tab-pane active" id="geral" role="tabpanel">
        <div class="row">
          <div class="form-group col-lg-3">
            <label class="form-control-label">Telefone</label>
            <input type="phone" name="empresario" placeholder="Insira o telefone da empresa" class="form-control sp_celphones" value="">
          </div>

          <div class="form-group col-lg-7">
            <label class="form-control-label">Email</label>
            <input type="email" name="empresario" placeholder="Insira o email da empresa" class="form-control" value="">
          </div>

          <div class="form-group col-lg-2">
            <label class="form-control-label text-success">Cliente desde</label>
            <input type="date" name="empresario" placeholder="Data admissão" class="form-control" value="">
          </div>

          <div class="form-group col-lg-4">
            <label class="form-control-label">Pessoa p/ contato</label>
            <input type="email" name="empresario" placeholder="Nome da pessoa para contato" class="form-control" value="">
          </div>

          <div class="form-group col-lg-3">
            <label class="form-control-label">Tipo Certificado Digital</label>
            <input type="text" name="codigo" placeholder="Código" class="form-control" value="<?php echo ""; /*esc($usuario->nome);*/ ?>">
          </div>

          <div class="form-group col-lg-2">
            <label class="form-control-label"> Vecto Cert. Digital</label>
            <input type="date" name="codigo" placeholder="Código" class="form-control" value="<?php echo ""; /*esc($usuario->nome);*/ ?>">
          </div>

          <div class="form-group">
            <input id="option" type="checkbox" value="">
            <label for="option">Ativo</label>
          </div>

          <div class="form-group col-lg-12">
            <label class="form-control-label">Observação</label>
            <textarea cols="30" rows="5" name="empresario" placeholder="Insira as observações da empresa" class="form-control" value=""></textarea>
          </div>
        </div>
      </div>

      <div class="tab-pane" id="dp" role="tabpanel" aria-labelledby="history-tab">

        <div class="form-group col-lg-3">
          <label class="form-control-label">Quantidade funcionários</label>
          <input type="text" name="codigo" placeholder="Código" class="form-control" value="<?php echo ""; /*esc($usuario->nome);*/ ?>">
        </div>

        <div class="form-group">
          <input id="option" type="checkbox" value="">
          <label for="option">Tem folha de pagamento</label>
        </div>

        <div class="form-group">
          <input id="option" type="checkbox" value="">
          <label for="option">Controla CND's</label>
        </div>

        <div class="form-group">
          <input id="option" type="checkbox" value="">
          <label for="option">Entrega RAIS</label>
        </div>
      </div>

      <div class="tab-pane" id="df" role="tabpanel" aria-labelledby="deals-tab">
        <div class="col">
          <div class="form-group col-lg-6">
            <label class="form-control-label">Regime tributário</label>
            <input type="text" name="codigo" placeholder="Código" class="form-control" value="<?php echo ""; /*esc($usuario->nome);*/ ?>">
          </div>
        </div>
      </div>

      <div class="tab-pane" id="dc" role="tabpanel" aria-labelledby="deals-tab">
        <div class="col">
          <div class="form-group">
            <input id="option" type="checkbox" value="">
            <label for="option">Entrega movimento contábil</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-end">
    <a href="#" class="btn btn-secondary btn-sm mr-3"> Cancelar</a>
    <a href="#" class="btn btn-success btn-sm"> Salvar</a>
  </div>
</div>
</div> -->

  <?php $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>

  <script>
    $(document).ready(function() {

      $('#abasempresa').on('click', '.tab', function(e) {
        e.preventDefault();
        $(this).tab('show');
      });



    });
  </script>
  <?php $this->endSection(); ?>