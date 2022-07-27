<table>


<?php
foreach($books as $book)
 {
?>
<tr>
		<td><?php echo $book->title; ?></td>
		<td><?php echo $book->author; ?></td>
		<td><?php echo $book->description; ?></td>
	</tr>

<?php	
}
?>
	</table>