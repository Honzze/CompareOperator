<?php 
class TourOperator {
    private  $id;
    private  $name;
    public  $link;
    private  $gradeCount;
    private  $gradeTotal;
    private  $isPremium;
    public  $classname = 'TourOperator';


    function __construct($data)
    {
        $this->hydrate($data);
    }
    function hydrate($data){
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->link = $data['link'];
        $this->gradeCount = $data['grade_count'];
        $this->gradeTotal = $data['grade_total'];
        $this->isPremium = $data['is_premium'];
    }
    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;

    }
    function getLink(){
        return $this->link;

    }
    function getGradeCount(){
        return $this->gradeCount;

    }
    function getGradeTotal(){
        return $this->gradeTotal;

    }
    function getPremium(){
        return $this->isPremium;

    }
    
}
?>