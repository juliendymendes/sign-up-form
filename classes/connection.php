<?php
    class Connection{
        private $host = 'localhost';
        private $dbname = 'form_users';
        private $user = 'root';
        private $pass = '';

        public function connect(){
            try{
                $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->user", "$this->pass");
                return $conexao;
            }catch(PDOException $error){
                echo '<p> Erro: ' . $error->getMessage() . '</p>';
            }
        }
    }

?>