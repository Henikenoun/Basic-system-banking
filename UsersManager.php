<?php
    class UsersManager
    {
        public $db;
        public function __construct($db)
        {
            $this->setDb($db);
        }
        public function setDb(PDO $db)
        {
            $this->db=$db;
        }
        public function add(Users $use)
        {
            $q=$this->db->prepare('INSERT INTO users (id,name,email,balance)VALUES(0,:name,:email,:balance)');
            $q->bindValue(':name',$use->getName());
            $q->bindValue(':email',$use->getEmail());
            $q->bindValue(':balance',$use->getBalance());
            $R=$q->execute();
            echo $this->db->lastInsertId();
            if(!$R){
                echo"echec insertion";
            }
            else{
                echo"insertion reussit";
            
            }

        }
       /* public function delete(Users $use)
        {
            $this->db->exec('DELETE FROM users WHERE id='.$use->getId());
        }
       */

    }
?>