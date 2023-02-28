<h1> Novo Cadastro <h1>

<!-- Formulário para receber os inputs e enviar a ação-->
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>Saldo (opcional)</label>
        <input type="number" name="saldo" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-primary">Enviar</button>
    </div>
</form>

