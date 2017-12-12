<button id="backBtn" onclick="location.href='./'">←</button>
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
	echo '<td><a href="'.URL.'students/update?id='.$student['id'].'" class="update" style="font-size:25x; text-align:center;">
		Update student</a></td>';
	echo '<tr>';
}

?>

</table>
<br><br>
</form>

<h1>Add new student: </h1>
<form method="post" action="<?php echo URL; ?>students/add" enctype="multipart/form-data"> 
    <input type="text" name="first_name" placeholder="First name:"><br/>
    <input type="text" name="last_name" placeholder="Last name:"><br/>
    <input type="text" name="birthday" placeholder="Date of birth:" onfocus="(this.type='date')" onblur="(this.type='text')" ><br/>
    <select name="school_id">
    	<option value="" disabled selected hidden>School:</option>
    	<?php foreach($data['schools'] as $school) { ?>
    		<option value="<?php echo $school['id']; ?>" ><?php echo $school['name']; ?> </option>
    	<?php } ?>
    </select>
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Add" id="addBtn" style="margin-left:400px; width:350px;"> 
</form>

