<button id="backBtn" onclick="location.href='./'">←</button>
<h1>School info:</h1>
<form method="post" action="<?php echo URL; ?>schools/updateSchool">
<input type="hidden" name="id" value="<?php echo $data['school']['id'];?>"/>
<p>Name: <input type="text" value="<?php echo $data['school']['name']; ?>" name="name"/></p>
<p>Address: <input type="text" value="<?php echo $data['school']['address']; ?>" name="address"/></p>
<p>Max students: <input type="text" value="<?php echo $data['school']['max_students']; ?>" name="max_students"/></p>
<p>Fee: <input type="text" value="<?php echo $data['school']['fee']; ?>" name="fee"/></p>
	<input type="submit" value="Save" id="saveBtn" />
</form>
<br>
