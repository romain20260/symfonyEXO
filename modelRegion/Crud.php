<?php
include_once('Region.php');

class CRUD{

    private $database;

    function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=region;charset=utf8", "root", "root");
    }
    public function getAllRegions() :array
    {
        $req = $this->database->prepare("SELECT name FROM region");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        $resultFormat = [];
        foreach ($data as  $value) {
            array_push($resultFormat,$value["name"]);
        }
        return $resultFormat;
    }

    public function getOneRegion($name)
    {
        $req = $this->database->prepare("SELECT region.name, departement.name as depRegion, departement.code_postal FROM region INNER JOIN departement ON region.id_region = departement.id_region WHERE region.name = :name"); 
        $req->execute(array(":name" => $name));
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return new Region($data);
    }
}
?>