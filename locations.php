<!doctype html>
<html>
<head>
	<title>Locations</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="whales.css">
	<style type="text/css">
		table {
			width: 200px;
			background:white;
			color: black;
			border: 1px black solid;
			border-collapse: collapse;
			margin: auto;
		}
		td {
			border: 1px black solid;
			padding: 1px 0 1px 4 px;
			text-align: left;
		}
	</style>
</head>
<body>
	<div id="container">
		<!--Add include statements here-->
		<?php include("includes/header.php"); ?>
		<?php include("includes/nav.php"); ?>
		
		<div id="midcol">
				<h2>Locations Table Information</h2>
				<p>
					<!--Add the table here-->
					<?php
					// This script retrieves all the record from the whales table
					require('mysqli_connect.php'); // connect to the database
					// Make the query
					$query = "SELECT location_name FROM locations ORDER BY location_name ASC";
					$result = @mysqli_query($dbcon, $query); // Run the query
					
					if($result){ // If it ran ok, display the records
						//Table header
						echo '<table cellpadding="5"><tr>
						<td align="left"><b>Location name</b></td>
						</tr>';
						//Fetch and print out all the records
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							echo '<tr>
								<td align="left">'. $row['location_name'].'</td>
								</tr>';
						}
						echo '</table>'; //close the table
						mysqli_free_result($result); //Free up the resources
					}
					else{ // if it did not run ok
						//Mesage
						echo '<p class="error">This whale could not be retrieved.
						Please accept our apology for any inconvenience.</p>';
						//Debugging Message
						echo '<p>'.mysqli_error($dbcon).'<br/><br/>Query: '.$query.'</p>';
						//End of ($result)
						mysqli_close($dbcon); // Close the database connection
					}
				?>
				</p>
			</div>
	</div>
	<!--Add footer here-->
	<div id="footer">
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>