
<h1 id="content">testitivaction</h1><br>



<div id="footerform">
	<form id = "parcoursform" action = "" method = "POST">
		title <input type="text" name ="title"/><br>
		logo <input type="file" name ="file" id="file"/><br>
		definition : <textarea name="definition"></textarea><br>
		<input type="submit" value ="submit" id="submit"/>
	</form>
</div><script>$(document).ready(function (e) {

$('#parcoursform').on('submit',function(e){
	var form = $('#parcoursform')[0];
	var formData = new FormData(form);
	//$('#content').html(formData);
	e.preventDefault();
	//var fd = new FormData();
	//var files = $('#file')[0].files[0];
	//fd.append('file',files);
	$.ajax({
		url: "<?php echo base_url()?>parcours/ajouterparcours",
		type: 'post',
		data:formData,
		contentType: false,       
		cache: false,             
		processData:false,		
		success:function(response){
			$('#content').html('<img src="'+response+'"/>');
			console.log(response);
		}
	});
});});
</script>
