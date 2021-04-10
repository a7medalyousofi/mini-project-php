<?php

class RootClass {
    
    var $conn;

    function __construct($connection)
    {  
        $this -> conn = $connection;
        
    }


    //get all the courses
    function getCourses() {
        $qry= $this -> conn -> prepare("SELECT id, name FROM courses");
        $qry->setFetchMode(PDO:: FETCH_OBJ);
        
        if($qry->execute()) {
            if($qry->rowCount()>0){
                return $qry;
            }
            else {
                return [];
            }
        }
        else {
            echo "Something went wrong while fetching course data!";
        }
    }

    //get all the branches of a particular course (find branches by course id)
    function getBranchesByCourseId($courseId) {
        $qry= $this -> conn -> prepare("SELECT id, name,courseId FROM branches where courseId=:cid");
        $qry -> bindParam(":cid", $courseId);
        $qry->setFetchMode(PDO:: FETCH_OBJ);
        if($qry->execute()) {
            if($qry->rowCount()>0){
                return $qry->fetch();
            }
            else {
                return [];
            }
        }
        else {
            echo "Something went wrong while fetching branches data!";
        }
    }

 }
?>