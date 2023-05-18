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

          <a href="<?php echo site_url('grupo/criar'); ?>" class="btn btn-danger btn-sm mb-4" title="Permite incluir um novo grupo no sistema">Novo grupo</a>

          <div class="table-responsive">
            <table id="ajaxtable" class="table table-striped table-sm" style="width: 100%;">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Situação</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/af-2.5.3/b-2.3.6/r-2.4.1/datatables.min.js"></script>

<script>
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
      "ajax": '<?php echo site_url('grupos/recuperagrupos'); ?>',
      "columns": [{
          "data": 'nome'
        },
        {
          "data": 'descricao'
        },
        {
          "data": 'exibir'
        },
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
  });
</script>
<?php $this->endSection(); ?>