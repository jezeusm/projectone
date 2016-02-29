<?php

class Dbmanager{
    private static $__instance = null; //instantiation. double underscore means private
    private $__pdo, //represents the instantiation of the pdo.
            $__query,  //last query that was used.
            $__error = false, // represents wether there's an error or not.
            $__results, // stored our result set.
            $__count = 0; // count the results.
    
    private function __construct(){
        try{
            $this->$__pdo = new PDO('mysqli:host='. Config::get('mysqli/host') .';dbname='. Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    public static function getInstance(){
        if(!isset(self::$__instance)){
            self::$__instance = new Dbmanager();
        }
        return self::$__instance;
    }
}

?>