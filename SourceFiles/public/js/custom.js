$(document).ready(function() {
	$('.delete-link').click(function(){
		if(!confirm('Are you sure?'))
			return false;
	});
});