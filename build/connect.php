<?php
$con=mysqli_connect("localhost","root","","Local_job_portal");
if(isset($_POST['submit'])){
    $reference = $_POST['reference'];
    $jobSelection = $_POST['jobSelection'];
    $jobTitle = $_POST['jobTitle'];
    $companyName = $_POST['companyName'];
    $jobDescription = $_POST['jobDescription'];
    $requirements = $_POST['requirements'];
    $location = $_POST['location'];
    $cv = $_POST['cv'];
    $query = "INSERT INTO 'post_job'('reference', 'jobSelection', 'jobTitle', 'companyName', 'jobDescription', 'requirements', 'location', 'cv') VALUES ('$reference', '$jobSelection', '$jobTitle', '$companyName', '$jobDescription', '$requirements', '$location', '$cv')";
    $run = mysqli_query($con,$query);
    if($run){
    echo "<script>alert('You have been registered successfully')</script>";
    }
    else {
        echo "<script>alert('Registration failed')</script>";
    }
}
?>