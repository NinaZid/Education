<ul>
	<li><a href="Schools" style="width: 300px;">Schools</a></li>
	<li><a href="Students" style="width: 300px;">Students</a></li>
</ul>
<!-- <h2>Our schools</h2> -->
<style>
/*.mySlides {display:none;
margin-left: 300px;
}*/
</style>
<div class="w3-content w3-section" style="max-width:500px">
  <br>
  <img class="mySlides" src="<?php echo URL.'public/images/1.jpg' ?>" style="width:100%">
  <img class="mySlides" src="<?php echo URL.'public/images/2.jpg' ?>" style="width:100%">
  <img class="mySlides" src="<?php echo URL.'public/images/3.jpg' ?>"" style="width:100%">
   
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
