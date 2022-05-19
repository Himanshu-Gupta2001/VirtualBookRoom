<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=library_managment","root","");
        echo "Connection Done";

    }catch(PDOException $e){
        echo "Error";
    }
}

}