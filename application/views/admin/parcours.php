<div id="container">nos parcours admin</div>


<style>
	.form{
		background-color:#fafafa;
		position:fixed;
		bottom:0;
		width:100%;
	}
</style>


<div class="form">
	<h3>ajouter un nouveau parcours</h3>
	<form id="form_parcours" action=" " method="post">
		nom parcours:<input type="text" id="nom" name="nom"/><br>
		definition:<textarea name="paragraph" id="paragraph"></textarea><br>
		logo:<input type="file" id="image" name="image"/><br>
		<input type="button" id="submit" value="submit"/>
	</form>
</div>

<script>
 $('#submit').on('click',function(){
	 var form = $('#form_parcours')[0];
				var formData = new FormData(form);
	 $.ajax({
		 url:"<?= base_url()?>admin/ajouterParcours",
					type: "POST",             
					data: formData, 
					contentType: false,       
					cache: false,             
					processData:false,
					success:function(resp){
						$('#container').html(resp);
					}
	 });
 });
</script>