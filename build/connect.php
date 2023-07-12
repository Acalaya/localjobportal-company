<?php
$reference = $_POST['reference'];
$jobSelection = $_POST['jobSelection'];
$jobTitle = $_POST['jobTitle'];
$companyName = $_POST['companyName'];
$jobDescription = $_POST['jobDescription'];
$requirements = $_POST['requirements'];
$location = $_POST['location'];
$cv = $_POST['cv'];

//Database connection
$conn = new mysqli('localhost','',);
if($conn->connect_error){
    die('Connection Error :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("Insert into postjob(reference, jobSelection, jobTitle, companyName, jobDescription, requirements, location, cv) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssb",$reference, $jobSelection, $jobTitle, $companyName, $jobDescription, $requirements, $location, $cv);
    $stmt->execute();
    echo "Job Registered..";
    $stmt->close();
    $conn->close();
}
?>