<?php

class Manager
{
    private $bdd;
    public  $classname = 'Manager';

    public function __construct()
    {
        include './config/connectBDD.php';
        $this->bdd = $bdd;
    }
    function getAllDestination()
    {
        $sqlAllDestination = $this->bdd->prepare('SELECT * FROM destination');
        $sqlAllDestination->execute();
        $resultSqlAllDestination = $sqlAllDestination->fetchAll(PDO::FETCH_ASSOC);
        $AllDestination = [];
        foreach ($resultSqlAllDestination as $rlt) {
            array_push($AllDestination, new Destination($rlt));
        }
        return $AllDestination;
    }
    function getDestinationByLocations($Location)
    {
        $sqlOperatorByDestination = $this->bdd->prepare('SELECT * FROM destination INNER JOIN tour_operator ON destination.tour_operator_id = tour_operator.id WHERE destination.location = ?');
        $sqlOperatorByDestination->execute([$Location]);
        $resultSqlOperatorByDestination = $sqlOperatorByDestination->fetchAll();
        $OperatorByDestination = [];
        foreach ($resultSqlOperatorByDestination as $rltSqlOperatorByDestination) {
            $destination = new Destination($rltSqlOperatorByDestination);
            $tourOperator = new TourOperator($rltSqlOperatorByDestination);
            $destination->addTourOperator($tourOperator);
            array_push($OperatorByDestination, $destination);
        }
        return $OperatorByDestination;
    }
    function createReview($message, $author, $tour_operator_id)
    {
        $sqlcreateReview = $this->bdd->prepare('INSERT INTO `review`( `message`, `author`, `tour_operator_id`) VALUES (`?,?,?`)');
        $sqlcreateReview->execute([$message, $author, $tour_operator_id]);
    }
    function getReviewByOperatorId($id)
    {
        $sqlReviewByOperatorId = $this->bdd->prepare('SELECT * FROM review INNER JOIN tour_operator ON review.tour_operator_id = tour_operator.id WHERE review.tour_operator_id = ?');
        $sqlReviewByOperatorId->execute([$id]);
        $resultSqlReviewByOperatorId = $sqlReviewByOperatorId->fetchAll();
        $ReviewByOperatorId = [];
        foreach ($resultSqlReviewByOperatorId as $rltSqlReviewByOperatorId) {
            $review = new Review($rltSqlReviewByOperatorId);
            array_push($ReviewByOperatorId, $review);
        }
        return $ReviewByOperatorId;
    }
    function getAllOperator()
    {
        $sqlAllOperator = $this->bdd->prepare('SELECT * FROM tour_operator');
        $sqlAllOperator->execute();
        $resultSqlAllOperator = $sqlAllOperator->fetchAll();
        $AllOperator = [];
        foreach ($resultSqlAllOperator as $rltSqlAllOperator) {
            array_push($AllOperator);
        }
        return $AllOperator;
    }
    function updateOperatorToPremium()
    {
        $sqlcreateReview = $this->bdd->prepare('UPDATE `tour_operator` SET `is_premium`=`?` WHERE 1');
        $sqlcreateReview->execute();
    }
    function createTourOperator()
    {
        $sqlTourOperator = $this->bdd->prepare('INSERT INTO `tour_operator`(`id`, `name`, `link`, `grade_count`, `grade_total`, `is_premium`) VALUES (`?,?,?,?,?,?`)');
        $sqlTourOperator->execute();
    }
    function createDestination()
    {
        $sqlDestination = $this->bdd->prepare('INSERT INTO `destination`(`id`, `location`, `price`, `tour_operator_id`) VALUES (`?,?,?,?`)');
        $sqlDestination->execute();
    }

    function getLocationByName()
    {
        $sqlgetLocationByName = $this->bdd->query('SELECT * FROM `destination` GROUP BY `location`');
        $resultSqlgetLocationByName = $sqlgetLocationByName->fetchAll(PDO::FETCH_ASSOC);
        $getLocationByNames = [];
        foreach ($resultSqlgetLocationByName as $rltSqlgetLocationByName) {
            array_push($getLocationByNames, new Destination($rltSqlgetLocationByName));
        }
        return $getLocationByNames;
    }
}
