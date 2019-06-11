<?php

class InscriptionDB extends Inscription {
    private $_db;
    private $_array = array();
    
    public function __construct($db){
        $this->_db = $db;
    }
    
    public function ajoutAdmin($login,$password){
        try{
            $query = "insert into Admin(login, password) values(:login, :password)";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login',$login);
            $resultset->bindValue(':password',$password);
            $resultset->execute();
            return 1;
        }
        catch(PDOException $e){
            print "Echec de connexion";
        }
    }
}
?>

