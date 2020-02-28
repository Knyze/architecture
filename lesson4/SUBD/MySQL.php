<?php


class MySQL extends SUBD
{
    
    protected function createDBConnection():DBConnection
    {
        return new MySQL_DBConnection();
    }
    
    protected function createDBQueryBuilder():DBQueryBuilder
    {
        return new MySQL_DBQueryBuilder();
    }
    
    protected function createDBRecord():DBRecord
    {
        return new MySQL_DBRecord();
    }

}