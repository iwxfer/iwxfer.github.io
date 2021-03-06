<?
// config PDO
LoadFile "d:/wamp/bin/php/php5.5.12/libpq.dll"
sudo apt-get install php5-dev
sudo apt-get install php5-pgsql

/*
In postgreSQL, sequences are created when you are using the SERIAL data type.

CREATE TABLE ingredients (
  id         SERIAL PRIMARY KEY,
  name       varchar(255) NOT NULL,
);

So the sequence name will be ingredients_id_seq */
$db->lastInsertId('ingredients_id_seq');

// count rows
$nRows = $pdo->query('select count(*) from blah')->fetchColumn(0);
echo $nRows;