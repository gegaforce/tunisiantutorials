

<div class="parcours">
	<img class ="img" src="<?php echo base_url().'assets/images/'.$parcours['image'];?>"/>
	<h1><?php echo $parcours['nom'];?></h1> <br>
	<p><?php echo $parcours['paragraph'];?></p>

	<button id="edit<?php echo $parcours['id'];?>">edit</button>
	<button id="delete<?php echo $parcours['id'];?>">delete</button>
</div>
<style>

div .parcours{
	background-color:#f09f9f;
	margin-top:10px;
	margin-bottom:10px;
	width:1227px;
	height:274px;
	float:right;
}
.img{
	width:254px;
	height:254px;
	float:right;
	margin-top:10px;
	margin-bottom:10px;	
	margin-right:10px;
}
p{
	
}
h1{
	 
}
</style>

<script>
$("#delete<?php echo $parcours['id'];?>").on('click',function(){
	var id = <?php echo $parcours['id'];?>;
	$.ajax({
		url: "<?= base_url();?>admin/supprimerParcours",
		data: {'id': id},
		type:'post',
		success:function(resp){
			$('#container').html(resp);
		}
	});
});
</script>