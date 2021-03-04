<?php
    class Service{
        private $connection;
        private $user;

        public function __construct(Connection $connection, User $user){
            $this->connection = $connection->connect();
            $this->user = $user;
        }

        public function insert(){
            $query = "insert into tb_users(name, email, password)values(:name, :email, :password)";
            
            $name = $this->user->__get('name');
            $email = $this->user->__get('email');
            $pass = $this->user->__get('password');

            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pass);
            $stmt->execute();
            return $stmt;
        }

        public function read(User $user){
            $query = "select email, password from tb_users where email = '$user->email' and password= '$user->password'";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_OBJ);
            
        } 
    }



?>