<h1>Students in this school:</h1>
<table style="font-size: 30px; text-align: center; margin: 20px auto;">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Birthday</th>
	</tr>
<?php
foreach($data['students'] as $student) {
	echo '<tr>';
	echo '<td>'.$student['id'].'.</td>';
	echo '<td>'.$student['first_name'].'</td>';
	echo '<td>'.$student['last_name'].'</td>';
	echo '<td>'.$student['birthday'].'</td>';
	echo '<td><a href="'.URL.'students/view?id='.$student['id'].'">View student</td>';
	echo '<tr>';
}
?>
</table>
<button id="backBtn" onclick="location.href='./'">←</button>
