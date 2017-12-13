<button id="backBtn" onclick="location.href='./'">←</button>
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
	echo '<td><a href="'.URL.'schools/deleteSchool?id='.$school['id'].'" class="delete-link" style="font-size:25px; text-align:center;">Delete</a></td>';
	echo '<td><a href="'.URL.'schools/updateS?id='.$school['id'].'" class="update" style="font-size:25x; text-align:center;">
		Update</a></td>';

	echo '<tr>';
}
?>
</table>
<br><br>

<h1>Add new school: </h1>
<form method="post" action="<?php echo URL; ?>schools/addSchool"> 
    <input type="text" name="name" placeholder="Name:"><br/>
    <input type="text" name="address" placeholder="Address:"><br/>
    <input type="text" name="max_students" placeholder="Max students:"><br/>
    <input type="text" name="fee" placeholder="Fee($):"><br/>
    <input type="submit" value="Add" id="addBtn" style="margin-left:400px; width:350px;"> 
</form>



