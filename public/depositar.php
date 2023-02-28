<h1> Depositar <h1>

<?php
//função para puxar a pessoa pelo nome no bd
    $sql = "SELECT * FROM pessoa WHERE nome =".$_REQUEST["nome"];
    $res =$conn->query($sql);
    $row = $res->fetch_object();
?>

<!-- Formulário que pega inputs e envia ação, saldo e nome -->
<form action="?page=debitar" method="POST">
    <input type="hidden" name="acao" value="depositar">
    <input type="hidden" name="saldo" value="<?php print $row->saldo; ?>">
    <input type="hidden" name="nome" value="<?php print $row->nome; ?>">
    

    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Valor a ser debitado:</label>
        <input type="number" name="valor" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-primary">Enviar</button>
    </div>
</form>