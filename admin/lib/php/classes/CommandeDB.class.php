<?php
class CommandeDB extends Commande {
    private $_db;
    private $_array = array();
    
    public function __construct($db){
        $this->_db = $db;
    }
    
    public function ajoutCommande($nbt1, $nbt2, $nbp1, $nbp2, $somme, $idc, $nbf1, $nbf2){
        try{
            $query = "insert into commande(nb_tshirt1, nb_tshirt2, nb_pull, nb_pull2, somme, id_client, nb_fig1, nb_fig2)values(:nbt1, :nbt2, :nbp1, :nbp2, :somme, :idclient, :nbf1, :nbf2)";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nbt1',$nbt1);$resultset->bindValue(':nbt2',$nbt2);$resultset->bindValue(':nbp1',$nbp1);$resultset->bindValue(':nbp2',$nbp2);$resultset->bindValue(':somme',$somme);$resultset->bindValue(':idclient',$idc);$resultset->bindValue(':nbf1',$nbf1);$resultset->bindValue(':nbf2',$nbf2);
            $resultset->execute();
            return 1;           
        }
        catch(PDOException $e){
            print $e->getMessage(); 
        }
    }
}
