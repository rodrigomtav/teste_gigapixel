
<?php
    function incluir($nome, $PDO){
        $PDO = $PDO;
        $nome = $nome;
        $sql = "INSERT INTO pessoa(nome) VALUES(:nome)";
        $stmt = $PDO->prepare( $sql );
        $stmt->bindParam( ':nome', $nome );
        
        $result = $stmt->execute();
        
        if ( ! $result )
        {
            var_dump( $stmt->errorInfo() );
            exit;
        }
        
        echo $stmt->rowCount() . "linhas inseridas";
    }

//incluir('Lionel Messi', $PDO);
?>