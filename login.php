<?php
// Get a connection for the database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "web_systems_final";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])){

    if(!empty($_POST['Uname']) && !empty($_POST['pass'])){

        $username = $_POST['Uname'];
        $password = $_POST['pass'];

        $query = "SELECT id, Username, Password FROM jobs";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        header("Location: ./index.html");
        if($run){
            header("Location: ./index.html");
        }
        else{
            echo "Form not submitted";
        }
    }
    else{
        echo "All Fields Required";
    }
}