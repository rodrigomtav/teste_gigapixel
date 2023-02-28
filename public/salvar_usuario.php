<!-- Switch para receber ação e executar scripts -->
<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $saldo = $_POST["saldo"];

            $sql = "INSERT INTO pessoa (nome, saldo) VALUES ('{$nome}','{$saldo}')";
            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Cadastro realizado');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro no cadastro');<script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
        case 'editar':
            $nome = $_POST["nome"];
            $saldo = $_POST["saldo"];

            $sql = "UPDATE pessoa SET nome='{$nome}', saldo='{$saldo}' WHERE id=".$_REQUEST["id"];
                
            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível editar');<script>";
                print "<script>location.href='?page=listar';</script>";
            }
            
            break;
        case 'excluir':
            $sql = "DELETE FROM pessoa WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');<script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    
        case 'debitar':
            $valor = $_POST["valor"];
            $saldo = $_POST["saldo"];

            $result = $valor - $saldo;

            $sql = "UPDATE pessoa SET saldo = '{$result}' WHERE nome =".$_REQUEST["nome"];
            $res = $conn->query($sql);
            
            if ($res==true){
                print "<script>alert('Operação concluída');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível debitar');<script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        }