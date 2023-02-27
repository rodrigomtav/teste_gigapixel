<h1> Teste Gigapixel <h1>

    <h2><a href="cadastro.php">Novo cadastro</a> <br>
    <a href="receber.php">Depositar</a> <br>
    <a href="despesa.php">Lançar despesa</a> <br>



<?php
    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', '' );
    define( 'MYSQL_DB_NAME', 'bd_gigapixel' );

    try
    {
        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
    }
    catch ( PDOException $e )
    {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
    

    
    //incluir('Lionel Messi', $PDO);
?>
