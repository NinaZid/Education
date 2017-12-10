<h1>List of students:</h1>
<form method='post' action="" name='update'>
<table style="font-size: 20px; text-align: center; margin: 20px auto;">
	<tr>
		<th>First name</th>
		<th>Last name</th>
		<th>Birthday</th>
		<!-- <th>School</th> -->
	</tr>
<?php
foreach($data['students'] as $student) {
	echo '<tr>';
	echo '<td>'.$student['first_name'].'</td>';
	echo '<td>'.$student['last_name'].'</td>';
	echo '<td>'.$student['birthday'].'</td>';
	// echo '<td>'.$student['school_id'].'</td>';
	echo '<td><a href="'.URL.'students/view?id='.$student['id'].'">More info</td>';
	echo '<td><a href="'.URL.'students/delete?id='.$student['id'].'" class="delete-link" style="font-size:25px; text-align:center;">Delete student</a></td>';
	// echo '<td><a href="" class="update" style="font-size:25x; text-align:center;">
	// 	Update student</a></td>';
			echo '<td><a href="'.URL.'students/update?id='.$student['id'].'" class="update" style="font-size:25x; text-align:center;">
		Update student</a></td>';
	echo '<tr>';
}

?>
</table>
</form>
<button id="backBtn" onclick="location.href='./'">←</button>
