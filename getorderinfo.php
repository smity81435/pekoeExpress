<link href="css/stylesheet2.css" rel="stylesheet">
<h1 id="tablehead">EXPRESS ORDERS</h1>

<?php
// Get a connection for the database
require_once('mysqli_connect.php');

// Create a query for the database
$query = "SELECT * FROM orders";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>Time Placed</b></td>
<td align="left"><b>Order #</b></td>
<td align="left"><b>First_Name</b></td>
<td align="left"><b>Choice</b></td>
<td align="left"><b>Size</b></td>
<td align="left"><b>Cream</b></td>
<td align="left"><b>Sugar</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['time'] . '</td><td align="left">' . 
$row['order_id'] . '</td><td align="left">' .
$row['first_name'] . '</td><td align="left">' . 
$row['choice'] . '</td><td align="left">' .
$row['size'] . '</td><td align="left">' . 
$row['cream'] . '</td><td align="left">' .
$row['sugar'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
<footer>Designed and Programmed by Douglas Smith</footer>