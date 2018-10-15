
<?php 
// Connect to MySQL from PHP
// You can use either of these code segments BUT NOT both at the same time
// Both of these segments below perform the same task in different manners
// One of the segments is commented out in this example using /*  */

// NOTICE: the use of mysql_ as a prefix (as opposed to mssql or others)

///////////////////////////////////////////////
///////////////////////////////////////////////
// Open DB connection and select DB to use
// The '@' bypasses the usual PHP error handling, so you get to deal with a 
// failure return from pconnect yourself in the if statement below.
// If you leave off the '@' then any errors will automatically be thrown
@ $db = mysql_pconnect("localhost", "cgt356web1o", "Acoustic1o6698");
mysql_select_db("cgt356web1o");

// check to see if connection was successful
if(!$db)
{
	echo "Error: Could not connect to database.  Please try again later.";
	exit;
}

//Create the SQL query
$sql = "SELECT DISTINCT Title FROM Customers";

//execute the SQL query and store the result of the execution into $result
$result      = mysql_query($sql);

//Check to see if there are records in the result, if not set the number of results = 0
if(empty($result))
	$num_results = 0;
else
	$num_results = mysql_num_rows($result);

//Loop through the results
for($i=0; $i < $num_results; $i++)
{
	//store a single record into $row 
	//$row in this example is equivalent to oRS in ASP
	$row = mysql_fetch_array($result);

	//echo out the value of the column (field) pulled from the database
	echo $row["Title"]."<br />".chr(13);
}

//Close the database connection
mysql_close($db);

///////////////////////////////////////////////
///////////////////////////////////////////////


///////////////////////////////////////////////
///////////////////////////////////////////////
/*
$server="localhost";
$username="yourID";
$password="yourPass";

// Open DB connection
$sqlconnect = mysql_connect($server, $username, $password);

//Select the DB you want to use / work with
//You will need to change northwind to yourDB name
$sqldb      = mysql_select_db("northwind",$sqlconnect);

//Create the SQL query
$sqlquery   = "SELECT DISTINCT companyName FROM Customers;";

//execute the SQL query and store the result of the execution into $result
$result     = mysql_query($sqlquery);

//Loop through the results
while($row=mysql_fetch_array($result))
{
	//echo out the value of the column (field) pulled from the database
	echo $row['companyName']."<br />\n";
}

//Close the connection to the DB
mysql_close($sqlconnect);
*/
///////////////////////////////////////////////
///////////////////////////////////////////////
?>
