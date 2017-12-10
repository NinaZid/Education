<h1>List of schools:</h1>
<table style="font-size: 20px; text-align: center; margin: 20px auto;">
	<tr>
		<th>Id </th>
		<th>Name </th>
		<th>Address </th>
		<th>Max students </th>
		<th>Fee </th>
	</tr>

<?php
foreach($data['schools'] as $school) {
	echo '<tr>';
	echo '<td>'.$school['id'].'.</td>';
	echo '<td>'.$school['name'].'</td>';
	echo '<td>'.$school['address'].'</td>';
	echo '<td>'.$school['max_students'].'</td>';
	echo '<td>'.$school['fee'].'$'.'</td>';
	echo '<td><a href="'.URL.'schools/view?id='.$school['id'].'">More info</td>';
	echo '<tr>';
}
?>
</table>
<button id="backBtn" onclick="location.href='./'">←</button>

