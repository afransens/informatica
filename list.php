<?php

include include_mysql_setup.php;

$sql = "SELECT * FROM `king_khan` ORDER BY `king_khan`. $order $scending";


if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}


?>

<html>
	<body>
		<table>
			<tr>
				<td>Titel <a href="?order=Titel&scending=ASC">&uarr;</a> <a href="?order=Titel&scending=DESC">&darr;</a></td>
				<td>Artiest/Band <a href="?order=Artiest&scending=ASC">&uarr;</a> <a href="?order=Artiest&scending=DESC">&darr;</a></td>
				<td>Soort <a href="?order=Soort&scending=ASC">&uarr;</a> <a href="?order=Soort&scending=DESC">&darr;</a></td>
				<td>Formaat <a href="?order=Formaat&scending=ASC">&uarr;</a> <a href="?order=Formaat&scending=DESC">&darr;</a></td>
			</tr>
			<?php while($row = mysqli_fetch_assoc($result)){
  				echo '<tr> <td>' . $row['Titel'] . '</td>';
   				echo '<td>' . $row['Artiest'] . '</td>';
 				echo '<td>' . $row['Soort'] . '</td>';
 				echo '<td>' . $row['Formaat'] . '</td>'; 
				echo '<td><img src="' . $row['Afbeelding'] . '" alt="' . $row['Titel'] . '" height="128" width="128"/></td></tr>'; } 
  			?>
		</table>
	</body>
	<a href="index.php">Naar index</a>
</html>
