<h1>Editar Usuário</h1>
<?php 
$sql = "SELECT * FROM usarios WHERE id=" .$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_obrject();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label>
      Nome
    </label>
    <input type="text" name="nome" value="<?php print $row->nome;?>" class=" form-control">
  </div>
  <div class="mb-3">
    <label>
      Email
    </label>
    <input type="email" name="email" value="<?php print $row->email;?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>
      Senha
    </label>
    <input type="password" name="senha" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>
      Data de Nascimento
    </label>
    <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>" class="form-control">
  </div>
  <div mb-3>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>