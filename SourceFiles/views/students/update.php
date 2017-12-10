<h1>Student info</h1>
<form method="post" action="<?php echo URL; ?>students/updatestudent">
<input type="hidden" name="id" value="<?php echo $data['student']['id'];?>"/>
<p>First Name: <input type="text" value="<?php echo $data['student']['first_name']; ?>" name="first_name"/></p>
<p>Last Name: <input type="text" value="<?php echo $data['student']['last_name']; ?>" name="last_name"/></p>
<p>Birthday: <input type="text" value="<?php echo $data['student']['birthday']; ?>" name="birthday"/></p>
<p>School:
	<select name="school_id">
		<?php foreach($data['schools'] as $school) { ?>
			<option value="<?php echo $school['id']; ?>" <?php if($data['student']['school_id']==$school['id']) echo 'selected="selected"'; ?>><?php echo $school['name']; ?></option>
		<?php } ?>
	</select></p>
<br>
<input type="submit" value="Save"/>
</form>
<button id="backBtn" onclick="location.href='./'">←</button>
