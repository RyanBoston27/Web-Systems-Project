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

        $query = "SELECT * FROM login WHERE Username = '$username' AND Password = '$password'";
    
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $check = mysqli_fetch_array($run);
        if(isset($check)){
            ?>
           <script type="text/javascript">
           alert("Successfully logged in!");
           window.location.href = "index.html";
           </script>
           <?php
        }
        else{
            echo '<script>alert("Invalid Login Details")</script>';
        }
    }
    else{
        echo "All Fields Required";
    }
}
?>