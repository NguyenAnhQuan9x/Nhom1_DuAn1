<?php
    class LopModel extends DB{
        public function insert($value){
            $sql = "INSERT INTO Lop (ten_lop) VALUES ('$value')";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }
        public function getLop(){
            
        }
    }