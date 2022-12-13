<?php
// Get a connection for the database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "web_systems_final";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])){

    if(!empty($_POST['delete'])){

        $id = $_POST['delete'];

        $query = "DELETE FROM jobs WHERE id='$id'";

        $run = mysqli_query($conn, $query);

        if($run){
            echo "Item Deleted";
            header("Location: ./jobs.php");
        }
        else{
            echo "ERROR: Item NOT Deleted";
        }
    }
    }
?>