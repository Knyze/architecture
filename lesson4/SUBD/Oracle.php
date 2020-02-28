<?php


class Oracle extends SUBD
{
    
    protected function createDBConnection():DBConnection
    {
        return new OracleDBConnection();
    }
    
    protected function createDBQueryBuilder():DBQueryBuilder
    {
        return new OracleDBQueryBuilder();
    }
    
    protected function createDBRecord():DBRecord
    {
        return new OracleDBRecord();
    }

}