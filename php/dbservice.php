<?php
    include('config.php');
    class DB{
     
      
        private $host = _DNS_;
        private $db_name = _DB_;
        private $username = _USER_;
        private $password = _PASS_;
        public $conn;
    
        public function getConnection(){
     
            $this->conn = null;
     
            try{
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->exec('UTF-8');
            }catch(PDOException $exception){
                echo 'Connection error: ' . $exception->getMessage();
            }
     
            return $this->conn;
        }
    
        function executeDbSaveUpdateQuery($query){
            $conn =$this->getConnection();
            
            $stmt = $conn->prepare($query);
          
            $rs=     $stmt->execute();
        
            return $rs;
        }
    
        function executeDbFetchDataQuery($query){
            $conn =$this->getConnection();
            $stmt = $conn->query($query);
            return $stmt;
        }
    
    
    }
    ?>