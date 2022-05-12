<?php
class Destination {
    
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;
    public $tourOperator;
    public  $classname = 'Destination';
    public $pix;


    function __construct($data)
    {
        $this->hydrate($data);
    }
    function hydrate($data){
        $this->id = $data['id'];
        $this->location = $data['location'];
        $this->price = $data['price'];
        $this->tourOperatorId = $data['tour_operator_id'];
        $this->pix = $data['pix'];   
    }
    function getId(){
        return $this->id;
    }
    function getLocation(){
        return $this->location;
    }
    function getPrice(){
        return $this->price;
    }
    function getTourOperatorId(){
        return $this->tourOperatorId;
    }
    function getPix(){
        return $this->pix;
    }

    function addTourOperator($tourOperator){
        $this->tourOperator = $tourOperator;
    }


}
?>