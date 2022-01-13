<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
   <head>
       <title></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min'); ?>">
    </head>
    <body>
		<p id="notification"></p>
		<script type="text/javascript">
			// window.setInterval(function(){
			  // $.ajax({
					// url: "<?=site_url("Admin/notif")?>",
					// type: "post", 
					// success:function(data){
							// $('#notification').html(data);	
					// }
				// });
			// }, 5000);
		</script>
		<div class="container">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#fahres">أكتب الفهرس</button>
			<!-- Modal -->
			<div class="modal fade" id="fahres" role="dialog">
				<div class="modal-dialog">    
					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<form  id="form_fahres"action="" method="post" enctype="multipart/form-data">
					<div class="modal-body">		
						logo de cours:<input type="file" name = "file" id="file"/>
						titre de content file:<input type="text" name="content_file" /><br>
						title en arabe de cours:<input type="text" name="title" /><br>
						<textarea name ="content"></textarea>		 
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" id="enregistrer" data-dismiss="modal">سجل الفهرس في صفحة ثم في قاعدة البيانات</button>
					</div>
				</form>
			</div>      </div></div>
		</div>
		<script>
			$('#enregistrer').click(function(){
				var form = $('#form_fahres')[0];
				var formData = new FormData(form);
				$.ajax({
					url: '<?php echo base_url()?>index.php/writer/enregistrerContent',
					type: 'post',
					data:formData,
					contentType: false,       
					cache: false,             
					processData:false,		
					success:function(response){
						console.log(response);
					}
				});
			});
			$('#enregistrer').click(function(){
				var form = $('#form_fahres')[0];
				var formData = new FormData(form);
				$.ajax({
					url: '<?php echo base_url()?>index.php/writer/enregistrerContent',
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
		<div class="container">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modifier_logo">غير صورة الدرس</button>
			<!-- Modal -->
			<div class="modal fade" id="modifier_logo" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<form  id="form"action="" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					logo de cours:<input type="file" name = "file" id="file"/>
					<select id ="title_course" name="title_course">
						<option></option>
						<?php
						foreach($course_titles as $cours)
						{
							echo '<option value="'.$cours['title'].'">'.$cours['title'].'</td>';
						}
						?>
					</select>		  
				</div>
				<div class="modal-footer">
				  <button type="submit" class="btn btn-default" id="save_logo" data-dismiss="modal">غير الـlogo</button>
				</div>
			</form>
		</div> 
		<script>
			$('#save_logo').click(function(){
				var form = $('#form')[0];
				var formData = new FormData(form);
				$.ajax({
					url: '<?php echo base_url()?>index.php/writer/saveLogo',
					type: 'post',
					data:formData,
					contentType: false,       
					cache: false,             
					processData:false,		
					success:function(response){
						console.log(form);
						//$('#editeur').append('<div dir="ltr" class="code" id="code_form">'+$('#codeeditor').html()+'</div>');
					},
					error:function(){
						
					}
				});
			});

		</script> 
		<?php //var_dump($courses);die();?> 
		<style>
			.image-upload > input
			{
				display: none;	
			}
			#logo_upload{
				cursor: pointer;
			}
		</style>
		<!-- ajouter un nouveau cours-->
		<div dir="rtl" style ="margin-right:30px;border-style:solid;padding-right:30px;">
			<form id="form_new_cours" action="" method="post" enctype="multipart/form-data">
				<label>أدخل عنوان الدرس</label><br>
				<input type="text"name="title"/><br>
				<label>أدخل تعريف بسيط</label><br>
				<textarea name ="definition"></textarea><br>
				<label>إرفع صورة الدرس</label><br>
				<div class="image-upload">
					<label for="file-input">
						<img id="logo_upload" height="30" width="30" src="<?php echo img_url('ftp.png')?>"/>
					</label>

					<input id="file-input" name="file_img" type="file"/>
				</div>
				<input type="button" value="موافق" id="accord_cours"/>
			</form>
		</div>
		<script>
			$('#accord_cours').click(function(){
				var form = $('#form_new_cours')[0];
				var formData = new FormData(form);
				$.ajax({
					url:'<?php echo base_url()?>course/ajouterCours',
					type: "POST",             
					data: formData,
					contentType: false,       
					cache: false,             
					processData:false,
					success: function(response){
								//
						var json = JSON.parse(response);
						console.log(json.title);
						$.ajax({
							url:'<?php echo base_url()?>course/recupererAllCours',
							type:'get',
							success:function(data){
								$('#liste_cours').html(data);
							}
						});
					}
				});
			});
		</script>
		<!-- test liste de cours -->
		<div style="border-style:solid;" id="liste_cours">
			<?php
			foreach($cours as $value){
				echo $value['title'];
			}
			$i=0;
			foreach($cours as $value){
				$title = $value['title'];
				$logo = $value['logo'];
				$definition = $value['definition'];
				
				echo'<a id="a'.$i.'"href="'.site_url('index.php/course/tabeOfContent/'.urlencode($title)).'">';
				echo '<div class="panel panel-default">';
				 echo ' <div class="panel-body text-center">';
				echo'	<img id="img'.$i.'" src="'.img_url("logos/".$logo).'" height="162" width="254">';
				echo '	<p id="description'.$i.'" style="display:none;margin-top:-160px">'.$definition.'</p>';

				 echo' </div>';
				 echo ' <div class="panel-footer"><p>'.$title.'</p></div>';
				echo'</div>';
			echo'</a>';
			?>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#a<?php echo $i;?>').bind("mouseover", function(){
						$(this).find('#img<?php echo $i;?>').css('opacity', '0.1');
						$('#description<?php echo $i;?>').show();
					}); 
					$('#a<?php echo $i;?>').bind("mouseout", function(){
						$('#description<?php echo $i;?>').hide();
						$('#img<?php echo $i;?>').css('opacity', '1');
					});  
				});
			</script>
			<?php
				$i++;
				}
			?>
		</div>
		<a type="button" class="btn btn-success" href="<?php echo site_url('index.php/writer/course'); ?>">create new course</a>
		<table class="table table-striped" dir="rtl">
			<thead dir="rtl">
				<tr>
					<th>عنوان الدرس</th>
					<th>الباب</th>
					<th>الفقرة</th>
					<th>عدد الحروف</th>
					<th>الإعدادات</th>					
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach($courses as $course){
						echo '<tr>';
							echo '<td>'.$course['title'].'</td>';
							echo '<td>'.$course['chapter'].'</td>';
							echo '<td>'.$course['paragraph'].'</td>';
							echo '<td>'.$course['nombre_chars'].'</td>';			
							echo '<td>
									<a type="button" target="_blank" class="btn btn-success" href="'.site_url('index.php/writer/course/'.$course['folder'].'/'.$course['numero_chapter'].'/'.$course['numero_paragraph']).'">تغيير</a>
									<a type="button" target="_blank" class="btn btn-success" href="'.site_url('index.php/course/cours/'.urlencode($course['title']).'/'.$course['chapter'].'/'.$course['paragraph']).'">إعرض</a>
								</td>';
						echo '</tr>';
					} 
				?>
			</tbody>
		</table>
    </body>
</html>
