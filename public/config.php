<?php
//arquivo para criar conexão com bd
    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', '' );
    define( 'MYSQL_DB_NAME', 'bd_gigapixel' );

//realiza a conexão
    try
    {
        $conn = new MySQLi(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB_NAME);
    }
    catch ( Exception $e )
    {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
?>