<?php


class PostgreSQL extends SUBD
{
    
    protected function createDBConnection():DBConnection
    {
        return new PostgreSQL_DBConnection();
    }
    
    protected function createDBQueryBuilder():DBQueryBuilder
    {
        return new PostgreSQL_DBQueryBuilder();
    }
    
    protected function createDBRecord():DBRecord
    {
        return new PostgreSQL_DBRecord();
    }

}