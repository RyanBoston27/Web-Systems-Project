<?php
// Get a connection for the database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "web_systems_final";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])){

    if(!empty($_POST['Address']) && !empty($_POST['Description']) && !empty($_POST['Cost']) && !empty($_POST['Payout'])){

        $Address = $_POST['Address'];
        $Description = $_POST['Description'];
        $Cost = $_POST['Cost'];
        $Payout = $_POST['Payout'];
    
        $query = "INSERT INTO jobs(Address,Description,Cost, Payout) VALUES('$Address', '$Description', '$Cost', '$Payout')";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($run){
            echo "Form Submitted";
            header("Location: ./jobs.php");
        }
        else{
            echo "Form not submitted";
        }
    }
    else{
        echo "All Fields Required";
    }
}