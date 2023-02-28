<h1> Editar Usuário <h1>
<!-- Select para puxar a pessoa pelo id-->
<?php
    $sql = "SELECT * FROM pessoa WHERE id =".$_REQUEST["id"];
    $res =$conn->query($sql);
    $row = $res->fetch_object();
?>

<!-- Formulário que recebe inputs e envia ação e id --> 
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Saldo</label>
        <input type="number" name="saldo" value="<?php print $row->saldo; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-primary">Enviar</button>
    </div>
</form>

