<?php

include include_mysql_setup.php;


if ($search != null ){
	$sql = "SELECT * FROM `king_khan` WHERE `$category` LIKE '%$search%' ORDER BY `king_khan`. $order $scending";
}



if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}


?>

<html>
	<body>
		<table>
			<tr>
				<td>Titel <a href="?order=Titel&scending=ASC&search=<?php echo $search; ?>">&uarr;</a> <a href="?order=Titel&scending=DESC&search=<?php echo $search; ?>">&darr;</a></td>
				<td>Artiest/Band <a href="?order=Artiest&scending=ASC&search=<?php echo $search; ?>">&uarr;</a> <a href="?order=Artiest&scending=DESC&search=<?php echo $search; ?>">&darr;</a></td>
				<td>Soort <a href="?order=Soort&scending=ASC&search=<?php echo $search; ?>">&uarr;</a> <a href="?order=Soort&scending=DESC&search=<?php echo $search; ?>">&darr;</a></td>
				<td>Formaat <a href="?order=Formaat&scending=ASC&search=<?php echo $search; ?>">&uarr;</a> <a href="?order=Formaat&scending=DESC&search=<?php echo $search; ?>">&darr;</a></td>
			</tr>
			<?php while($row = mysqli_fetch_assoc($result)){
  				echo '<tr> <td>' . $row['Titel'] . '</td>';
   				echo '<td>' . $row['Artiest'] . '</td>';
 				echo '<td>' . $row['Soort'] . '</td>';
 				echo '<td>' . $row['Formaat'] . '</td> </tr>'; } 
  			?>
		</table>
<br>
 <form action="search.php">
  Suchen bitte:<br>
  <input type="text" name="search">
  <br>
<select name="category">
  <option value="Titel">Titel</option>
  <option value="Artiest">Artiest</option>
  <option value="Soort">Soort</option>
  <option value="Formaat">Formaat</option>
</select>
  <input type="submit" value="Suchen">
</form> 

	<a href="index.php">Naar index</a>
	</body>
</html>
