<?php

class AdminDB extends Admin {
    private $_db;
    private $_array = array();
    
    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }
    
    public function getAdmin($login,$password){
        try{
            $query = "select * from admin where login=:login and password=:password";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login',$login);
            $resultset->bindValue(':password',$password);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Admin($data);
            }   
            
        }
        catch(PDOException $e){
            print $e->getMessage(); 
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
    
    public function getId($login, $password){
         try{
            $query = "select id from admin where login=:login and password=:password";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login',$login);
            $resultset->bindValue(':password',$password);
            $resultset->execute();
            $id = $resultset->fetch()[0];
        }
        catch(PDOException $e){
            print $e->getMessage(); 
        }   
        return $id;
        
    }
    
    public function getLogin($id){
         try{
            $query = "select login from admin where id=:id";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id',$id);
            $resultset->execute();
            $login = $resultset->fetch()[0]; 
            
        }
        catch(PDOException $e){
            print $e->getMessage(); 
        }
        
        return $login;
    }
}
