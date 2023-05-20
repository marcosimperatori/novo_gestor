<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/af-2.5.3/b-2.3.6/r-2.4.1/datatables.min.css" rel="stylesheet" />

<?php $this->endSection(); ?>

<?php echo $this->section('caminho'); ?>

<?php $this->endSection(); ?>

<?php echo $this->section('conteudo'); ?>
<section class="no-padding-top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="block margin-bottom-sm">
          <a href="<?php echo site_url('grupos/criar'); ?>" class="btn btn-danger btn-sm mb-4" title="Permite incluir um novo grupo no sistema">Novo grupo</a>

          <div class="table-responsive">
            <table id="ajaxtable" class="table table-striped table-sm" style="width: 100%;">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Razão Social</th>
                  <th>Telefone</th>
                  <th>Ações</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal Form-->


<!-- Modal-->
<div id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true" class="modal fade text-left" data-backdrop="static" data-keyboard="false">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><strong id="editarModalLabel" class="modal-title"><!-- Elemento de carregamento -->

          <i id="loadingIcon" class="fa fa-spinner fa-spin loadingIcon text-warning" style="display: none;"></i>
          Editar grupo
        </strong>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="msg">

        </div>
        <p>Este formulário permite a edição do grupo</p>
        <input type="month" id="mesAnoInput">
        <form>
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome" class="form-control">
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" cols="30" rows="6"></textarea>
          </div>
          <input type="hidden" name="codigo">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
        <button type="submit" class="btn btn-primary m">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal-->
<div id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="excluirModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><strong id="excluirModalLabel" class="modal-title">Excluir grupo</strong>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <p>Este formulário permite a edição do grupo</p>
        <form>
          <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="Email Address" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Password" class="form-control">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/af-2.5.3/b-2.3.6/r-2.4.1/datatables.min.js"></script>

<script>
  function exibirDadosNoModal(dados) {

  }

  $(document).ready(function() {
    const DATATABLE_PTBR = {
      "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
      },
      "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
      },
      "select": {
        "rows": {
          "_": "Selecionado %d linhas",
          "0": "Nenhuma linha selecionada",
          "1": "Selecionado 1 linha"
        }
      }
    }

    $('#ajaxtable').DataTable({
      "oLanguage": DATATABLE_PTBR,
      "ajax": '<?php echo site_url('clientes/recuperaclientes'); ?>',
      "columns": [{
          "data": 'codigo'
        },
        {
          "data": 'apelido'
        },
        {
          "data": 'telefone'
        },
        {
          "data": 'acao',
          render: function(data) {
            return data;
          }
        }
      ],
      "deferRender": true,
      "processing": true,
      "language": {
        processing: '<i class"fa fa-spinner fa-spin fa-3x fa-fw"></i>',
      },
      "responsive": true,
      "pagingType": $(window).width() < 768 ? "simple" : "simple_numbers",
      "pageLength": 10,
    });

    $('#ajaxtable').on('click', '.editar', function() {
      var id = $(this).data('id');

      $.ajax({
        url: '<?php echo site_url('grupos/grupobyid'); ?>', // URL do arquivo PHP que busca os dados conforme o id
        type: 'GET', // Método de envio da solicitação
        data: {
          id: id
        }, // Dados a serem enviados para o servidor (no formato chave:valor)
        dataType: 'json', // Tipo de dados esperado como resposta (JSON, por exemplo)
        success: function(response) {
          var grupo = response.grupo[0];
          $('input[name="nome"]').val(grupo.nome);
          $('textarea[name="descricao"]').val(grupo.descricao);
          $('input[name="codigo"]').attr('value', grupo.id);
          $('#editarModal').modal('show');
        },
        error: function() {
          $(".msg").html('<div class="alert alert-danger alert-dismissible fade show"></div>');
        },
        complete: function() {
          //$(".msg").html('<div class="alert alert-success">requisição finalizada</div>');
        }
      });
    });

    $('#ajaxtable').on('click', '.excluir', function() {
      var id = $(this).data('id');
      // Lógica para abrir o modal de exclusão com base no ID
      $('#excluirModal').modal('show');
    });

    $('#editarModal').on('click', '.m', function(event) {
      event.preventDefault();

      $('.loadingIcon').show();
    });

    $('#editarModal').on('click', '#stop', function(event) {
      $('.loadingIcon').hide();
    });

    $('#editarModal').on('hidden.bs.modal', function() {
      $('.loadingIcon').hide();
    });
  });
</script>
<?php $this->endSection(); ?>