    CREATE TABLE pessoa(
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        nome VARCHAR(80) NOT NULL,
        saldo INT(100) DEFAULT NULL,
        PRIMARY KEY(id)
    );
     
    INSERT INTO pessoa (nome, saldo) VALUES
    ('Beraldo', '0'),
    ('João', NULL),
    ('Maria', '1000');


select * from pessoa