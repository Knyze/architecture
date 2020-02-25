<?php


abstract class SUBD
{
	public function createConnection()
    {
        return $this->createDBConnection();
    }
	
    public function createQueryBuilder()
    {
        return $this->createDBQueryBuilder();
    }
    
    public function createRecord()
    {
        return $this->createDBRecord();
    }
    
	abstract protected function createDBConnection():DBConnection;
    abstract protected function createDBQueryBuilder():DBQueryBuilder;
    abstract protected function createDBRecord():DBRecord;

}