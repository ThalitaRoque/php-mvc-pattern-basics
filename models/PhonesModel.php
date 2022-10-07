<?php

class Phones_model{
    private $db;
    private $phones;

    public function __construct(){
        $this->db = Conectar::conexion();
        $this->phones = array();
    }

    public function get_phones(){

        $sql = "SELECT * FROM phones";
        $result = $this->db->query($sql);
        while($row = $result->fetch_assoc())
        {
            $this->phones[] = $row;
        }
        return $this->phones;
    }

    public function insert($brand, $model, $memory, $company, $price){
        $result = $this->db->query("INSERT INTO phones (brand, model, memory, company, price) VALUES ('$brand',' $model', '$memory','$company', '$price')");
    }

    public function modify($id, $brand, $model, $memory, $company, $price){
        $result = $this->db->query("UPDATE phones SET brand ='$brand', model = '$model',
         memory ='$memory', company = '$company', price = '$price' WHERE id = '$id'");
    }

    public function remove($id){
        $result = $this->db->query("DELETE FROM phones WHERE id = '$id'");
    }

    public function get_phone($id){

        $sql = "SELECT * FROM phones WHERE id='$id' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
       
        return $row;
    }

}


?>