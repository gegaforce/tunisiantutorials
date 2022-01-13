		<form  id="form_fahres"action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
		title en arabe de cours:<input type="text" name="title" /><br>
		<textarea name ="content"></textarea>
		 
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="enregistrer" data-dismiss="modal">سجل الفهرس في صفحة ثم في قاعدة البيانات</button>
        </div>
		</form>
<script>
$('#enregistrer').click(function(){
	var form = $('#form_fahres')[0];
	var formData = new FormData(form);
	$.ajax({
		url: '<?php echo base_url()?>index.php/forum/create',
		type: 'post',
		data:formData,
		contentType: false,       
		cache: false,             
		processData:false,		
		success:function(response){
			console.log(response);
		},
		error:function(){
			
		}
	});
});
</script>
<?php
echo "hello create forum";
