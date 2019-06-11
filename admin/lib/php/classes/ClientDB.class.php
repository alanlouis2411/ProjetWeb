<?php
class ClientDB extends Client {
    private $_db;
    private $_array = array();
    
    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }
    
    public function ajoutClient($nom, $prenom, $ville, $rue, $num){
        try{
            $query = "insert into client(nom, prenom, ville, rue, num) values(:nom, :prenom, :ville, :rue, :num)";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom',$nom);
            $resultset->bindValue(':prenom',$prenom);
            $resultset->bindValue(':ville',$ville);
            $resultset->bindValue(':rue',$rue);$resultset->bindValue(':num',$num);$resultset->execute();
            return 1;
        }
        catch(PDOException $e){
            print $e->getMessage(); 
        }
    }
    
    public function getId(){
         try{
            $query = "select id from client order by id desc";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $id = $resultset->fetch()[0];
        }
        catch(PDOException $e){
            print $e->getMessage(); 
        }   
        return $id;
        
    }
}
