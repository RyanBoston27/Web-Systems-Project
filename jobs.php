<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobs</title>
    <link rel="icon" type="image/x-icon" href="./pictures/small_logo.png">
    <link rel = "stylesheet" href="./CSS/Nav.css">
    <link rel = "stylesheet" href="./CSS/foot_con.css">
    <link rel = "stylesheet" href="./CSS/jobs.css">
    
</head>
<body>
<div id="nav">
    <div id="nav-logo">
    <img src="./pictures/small_logo.png" alt="small logo">
    </div>
    <a href="index.html">Home</a>
    <a href="About.html">About</a>
    <a href="Residential_Sewer&water.html">Residential Sewer & water</a>
    <a href="Commercial_Sewer&water.html">Commercial Sewer & water</a>
    <a href="SewerPipeLining.html">Sewer Pipe Lining</a>
    <a class="active" href="jobs.php">jobs</a>
    <a href="Calculator.html">Calculator</a>
    <a href="login.html">Login</a>
</div>
<div id="php">
<?php
// Get a connection for the database
require_once('sql_conn.php');

// Create a query for the database
$query = "SELECT id, Address, Description, Cost, Payout FROM jobs";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table id="wahoo" align="left" cellspacing="5" cellpadding="8">
	<tr>
		<td align="left"><b>Id</b></td>
		<td align="left"><b>Address</b></td>
		<td align="left"><b>Description</b></td>
		<td align="left"><b>Cost</b></td>
		<td align="left"><b>Payout</b></td>
	</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['id'] . '</td><td align="left">' .
$row['Address'] . '</td><td align="left">' .
$row['Description'] . '</td><td align="left">' . 
$row['Cost'] . '</td><td align="left">' .
$row['Payout'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

echo '<div id="delete_form"><form action="delete.php" method="post">
		<b>Enter the ID you would like to delete</b><input type="text" name="delete">
		<button type="submit" name="submit">Submit</button>
	  </form></div>';

echo '<div id="add_form"><form action="insert_data.php" method="post">
        <h1><u>Add New Job</u></h1><br>
        <h2><b>Enter Address: </b><input type="text" name="Address"><br>
        <b>Enter Description: </b><input type = "text" name="Description"><br>
        <b>Enter Cost: </b><input type = "text" name="Cost"><br>
        <b>Enter Payout: </b><input type="text" name="Payout"><br>
        <button type ="submit" name="submit">Submit</button>
      </form></div>';

 
}
else{

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);
?>
</div>
<div class="contact">
        <div class="contact-text">
        <p>
            <h3><u>M&B Services</u></h3> <br>
            <br>
            25817 Goldfinch Ave. <br>
            Wyoming, MN 55092 <br>
            <br>
            Phone: 651-900-9704 <br>
            Fax: 612-460-9370 <br>
            Email: molly@mb-servicesllc.com <br>
            <br>
            24/7 EMERGENCY SERVICE <br>
            651-248-1697 <br>
            612-710-8892<br>
            <a href="https://www.facebook.com/Mbserviceslnc/"><img src="./pictures/facebook.png" alt="facebook"></a>
        </p>
        </div>
    </div>
    <div class="footer">
        ©2020 M&B Services. All Rights Reserved | Terms of Use | Disclaimer | Privacy Policy
    </div>
    <script src="./JS/Nav.js" defer></script>
</body>
</html>