<?php
$con=mysqli_connect("localhost","root","","Local_job_portal");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Job Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-4 text-center bg-blue-200 text-gray-800">Register Job Post</h2>
        
        <form action="" method="POST">
            <label for="reference" class="text-gray-700 mb-2 mr-2 font-semibold">Reference Number:</label>
            <input type="text" id="reference" name="reference" required class="p-2 border border-gray-400 rounded "><br>

            <div class="m-4">
                <input type="radio" id="fulltime" name="jobSelection" value="fulltime" checked>
                <label for="fulltime" class="font-semibold text-gray-700 mr-14">Full-Time</label> 
                <input type="radio" id="parttime" name="jobSelection" value="parttime">
                <label for="parttime" class="font-semibold text-gray-700 mr-14">Part-Time</label> 
                <input type="radio" id="intern" name="jobSelection" value="intern">
                <label for="intern" class="font-semibold text-gray-700 mr-14">Internship</label> <br>
            </div>
            
            <div class="mb-4">
                <label for="jobTitle" class="block text-gray-700 font-semibold mb-2">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" required class="w-full p-2 border border-gray-400 rounded">
            </div>
            
            <div class="mb-4">
                <label for="companyName" class="block text-gray-700 font-semibold mb-2">Company Name:</label>
                <input type="text" id="companyName" name="companyName" required class="w-full p-2 border border-gray-400 rounded">
            </div>
            
            <div class="mb-4">
                <label for="jobDescription" class="block text-gray-700 font-semibold mb-2">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription" rows="4" required class="w-full p-2 border border-gray-400 rounded"></textarea>
            </div>
            
            <div class="mb-4">
                <label for="requirements" class="block text-gray-700 font-semibold mb-2">Requirements:</label>
                <textarea id="requirements" name="requirements" rows="4" required class="w-full p-2 border border-gray-400 rounded"></textarea>
            </div>
            
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-semibold mb-2">Location:</label>
                <input type="text" id="location" name="location" required class="w-full p-2 border border-gray-400 rounded">
            </div>
            <div>
                <label for="cv" class=" font-semibold text-gray-700 mr-4 ">Upload your CV</label>
                <input type="file" id="cv" name="cv" class=" text-gray-600 w-20 bg-gray-100 hover:bg-gray-400  " >
            </div>
            <div class="mt-6">
                <input type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded" value="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>



<?php

if(isset($_POST['submit'])){
    $reference = $_POST['reference'];
    $jobSelection = $_POST['jobSelection'];
    $jobTitle = $_POST['jobTitle'];
    $companyName = $_POST['companyName'];
    $jobDescription = $_POST['jobDescription'];
    $requirements = $_POST['requirements'];
    $location = $_POST['location'];
    $cv = $_POST['cv'];
    $query = "INSERT INTO `jobpost`(`reference`, `jobTitle`, `companyName`, `jobDescrition`, `requirements`, `location`, `cv`) VALUES ('$reference','$jobSelection','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
    $run = mysqli_query($con,$query);
    if($run){
    echo "<script>alert('You have been registered successfully')</script>";
    header("Location: message.php");
    }
    else {
        echo "<script>alert('Registration failed')</script>";
    }
}
?>

