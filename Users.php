<?php 
    class Users
    {   private int $id;
        private string $name;
        private string $email;
        private int $balance;
        
        public function __construct(int $id, string $name, string $email, int $balance)
        {   $this->id=$id;
            $this-> name=$name;
            $this-> email=$email;
            $this-> balance=$balance;
        }
        public function getId():int{return $this->id;}
        public function setId(int $id){$this->id=$id;}
        public function getName():string{return $this->name;}
        public function setName(string $name){$this->name=$name;}
        public function getEmail():string {return $this -> email;}
        public function setEmail(string $email){$this ->email=$email ;}
        public function getBalance():int {return $this->balance;}
        public function setBalance(int $balance){$this -> balance= $balance;}
    }
?>