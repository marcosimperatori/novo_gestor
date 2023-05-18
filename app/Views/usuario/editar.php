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

        <div id="response">

        </div>

        <?php echo form_open('/', ['id' => 'form'], ['id' => "$usuario->id"]) ?>

        <?php echo $this->include('usuario/_form'); ?>

        <div class="form-group mt-5 mb-2">
          <input id="btn-salvar" type="submit" value="Salvar" class="btn btn-danger btn-sm mr-e">

          <a href="<?php echo site_url("usuarios/exibir/$usuario->id"); ?>" class="btn btn-secondary btn-sm ml-2">Voltar</a>
          <a href="<?php echo site_url("usuarios"); ?>" class="btn btn-secondary btn-sm ml-2">Usuários</a>
        </div>
        <?php form_close() ?>
      </div>
    </div>
  </div>
</div>

<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>
  $(document).ready(function() {
    $("#form").on('submit', function(e) {
      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: '<?php echo site_url('usuarios/atualizar'); ?>',
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
          $("#response").html('');
          $("#btn-salvar").val('Aguarde...');
        },
        success: function(response) {
          $("#btn-salvar").val('Salvar');
          $("#btn-salvar").removeAttr("disabled");

          $('[name=csrf_test_name]').val(response.token);

          if (!response.erro) {

            if (response.info) {
              $("#response").html('<div class="alert alert-info alert-dismissible fade show">' + response.info + '</div>');
            } else {
              //tudo certo na atualização, redirecionar o usuário
              window.location.href = "<?php echo site_url("usuarios/exibir/$usuario->id") ?>"
            }
          } else {
            //existem erros de validação

            $("#response").html('<div class="alert alert-danger alert-dismissible fade show">' + response.erro + '</div>');

            if (response.erros_model) {
              $.each(response.erros_model, function(key, value) {
                $("#response").append('<ul class="list-unstyled"><li class="text-danger">' + value + '</li></ul>');
              });
            }
          }
        },
        error: function() {
          alert("falha ao executar a operação");
          $("#btn-salvar").val('Salvar');
          $("#btn-salvar").removeAttr("disabled");
        },
      });
    });

    $('#form').submit(function() {
      $(this).find(":submit").attr('disabled', 'disabled');
    });
  });
</script>

<?php $this->endSection(); ?>