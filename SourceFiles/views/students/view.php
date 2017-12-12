<button id="backBtn" onclick="location.href='./'">←</button>
<div>
<h1>Student info:</h1>
<p>First Name: <?php echo $data['student']['first_name']; ?> </p>
<p>Last Name: <?php echo $data['student']['last_name']; ?></p>
<p>Birthday: <?php echo $data['student']['birthday']; ?></p>
<p>School: <?php echo $data['school']['name']; ?></p>
</div>
<div>
	<!-- <p>Student image:</p> -->
	<img src= "<?php echo URL. $data['student']['image']; ?>" style="width: 200px; height: 200px;"  />
</div>
<br>
