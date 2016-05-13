<?php
require("config.php");
$classN = isset($_POST["classN"])?$_POST["classN"]:"null";
$teacherN = isset($_POST["teacherN"])?$_POST["teacherN"]:"null";
$major = isset($_POST["major"])?$_POST["major"]:"null";
$classcall = isset($_POST["classcall"])?$_POST["classcall"]:"null";
$classexam = isset($_POST["classexam"])?$_POST["classexam"]:"null";
$homework = isset($_POST["homework"])?$_POST["homework"]:"null";
$midexam = isset($_POST["midexam"])?$_POST["midexam"]:"null";
$endexam = isset($_POST["endexam"])?$_POST["endexam"]:"null";
$cost = isset($_POST["cost"])?$_POST["cost"]:"null";
$value = isset($_POST["value"])?$_POST["value"]:"null";
$say = isset($_POST["say"])?$_POST["say"]:"null";


$sqlr = "INSERT INTO ".$list." (classN,teacherN,major,midexam,endexam,say,value,cost,classcall,homework,classexam,posttime,error)VALUE ('".$classN."','".$teacherN."','".$major."','".$midexam."','".$endexam."','".$say."','".$value."','".$cost."','".$classcall."','".$homework."','".$classexam."',CURRENT_TIMESTAMP,NULL)";
echo($sqlr);
$query = $_link->prepare($sqlr);
$query->execute();
header('Location:index.php');
?>