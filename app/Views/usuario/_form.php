<div class="form-group">
  <label class="form-control-label">Nome</label>
  <input type="text" name="nome" placeholder="Insira o nome do usuário" class="form-control" value="<?php echo esc($usuario->nome); ?>">
</div>

<div class=" form-group">
  <label class="form-control-label">Email</label>
  <input type="email" name="email" placeholder="Insira o email" class="form-control" value="<?php echo esc($usuario->email); ?>">
</div>

<div class="form-group">
  <label for="password" class="form-control-label">Nova senha</label>
  <input type="password" name="password" placeholder="Digite a nova senha" class="form-control" value="">
</div>

<div class=" form-group">
  <label for="password_confirmation" class="form-control-label">Confirme a nova senha</label>
  <input type="password" name="password_confirmation" placeholder="Redigite a nova senha" class="form-control" value="">
</div>

<div class="custom-control custom-checkbox">
  <input type="hidden" name="ativo" value="0">
  <input type="checkbox" name="ativo" id="ativo" value="1" class="custom-control-input" <?php if ($usuario->ativo == true) : ?> checked <?php endif; ?>>
  <label for="ativo" class="custom-control-label">Usuário ativo</label>
</div>