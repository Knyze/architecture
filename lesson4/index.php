<?php

require 'DBConnection/DBConnection.php';
require 'DBConnection/MySQL_DBConnection.php';
require 'DBConnection/OracleDBConnection.php';
require 'DBConnection/PostgreSQL_DBConnection.php';

require 'DBQueryBuilder/DBQueryBuilder.php';
require 'DBQueryBuilder/MySQL_DBQueryBuilder.php';
require 'DBQueryBuilder/OracleDBQueryBuilder.php';
require 'DBQueryBuilder/PostgreSQL_DBQueryBuilder.php';

require 'DBRecord/DBRecord.php';
require 'DBRecord/MySQL_DBRecord.php';
require 'DBRecord/OracleDBRecord.php';
require 'DBRecord/PostgreSQL_DBRecord.php';

require 'SUBD/SUBD.php';
require 'SUBD/MySQL.php';
require 'SUBD/Oracle.php';
require 'SUBD/PostgreSQL.php';


function testFactory(SUBD $subd) {
    
    $subd->createConnection()->connect();
    $subd->createQueryBuilder()->query();
    $subd->createRecord()->record();
}

testFactory(new MySql);
testFactory(new Oracle);
testFactory(new PostgreSQL);