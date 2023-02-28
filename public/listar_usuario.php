<h1> Listar usuário </h1>
<?php
//consulta básica de SELECT
    $sql = "SELECT * FROM pessoa";
    $res = $conn->query($sql);
    $qtd = $res ->num_rows;


    if($qtd>0){
            print "<table>";
            print "<tr>";
            print "<th> # </th>";
            print "<th> Nome </th>";
            print "<th> Saldo </th>";
            print "<th> Ações </th>";
            print "</tr>";

//loop vai armazenar cada linha do banco de dados em um indice da array row
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->saldo."</td>";
            //botões que redirecionam para os arquivos das operações.
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\"
                class='btn'>Editar</button>
            <button onclick=\"location.href='?page=depositar&id=".$row->id."';\"
                class='btn'>Depositar</button>
            <button onclick=\"location.href='?page=debitar&nome=".$row->nome."';\"
                class='btn'>Debitar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';} else {false;}
                \"class ='btn'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'> Não encontrou resultados! </p>";
    }

?>