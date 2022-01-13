<!DOCTYPE html>
<html>

	<head>
 		<title>Mon éditeur WYSIWYG</title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min'); ?>">
		<script type="text/javascript" src="<?php echo js_url('jquery-3.2.0.min')?>"></script>

	</head>

	<body>
	<style>
		#editeur{
			width: 500px; 
			height: 200px;
			border: 1px solid black;
			padding: 5px;
			overflow: auto;
			font-family: 'Droid Arabic Naskh', serif;
			width:741px;
			margin-right:20px;
		}
	</style>
	<script>
		function commande(nom, argument){
			if (typeof argument === 'undefined') {
				argument = '';
			}
			
			document.execCommand(nom, false, argument);
		}
	</script>

	<div>
		<a class="btn btn-primary" href="<?php echo site_url('Home/articles')?>">المقالات</a>
		<a class="btn btn-primary" href="<?php echo site_url('Home/courses')?>">الدروس</a>
		<a class="btn btn-primary" href="<?php echo site_url('Home/articles')?>">المقالات</a>
	</div>
		<div class="row"style="float:right;">
		
			<div id='tableau_bord'>
				<input type="button" value="G" class="btn btn-primary" style="font-weight:bold;" onclick="commande('bold');" >
				<input type="button" value="I" class="btn btn-primary" style="font-style:italic;" onclick="commande('italic');"/> 
				<input type="button" value="S" class="btn btn-primary" style="text-decoration:underline;" onclick="commande('underline');"/> 			
				<input type="button" value="Article" class="btn btn-primary"  onclick="commande('formatblock', 'article');"/> 			
				<select onclick="commande('fontSize',this.selectedIndex);">
					<option></option> 
					<option>20</option> 
					<option>24</option> 
					<option>28</option> 
					<option>32</option> 
				</select>
			
				<div class="form-group col-lg-3" >
					<label for="code"> عنوان المقالة من غير رموز</label>
					<input type="text" dir="rtl" id='title' class="form-control input-normal">
				</div>
			</div>
			<div id="editeur" dir="rtl" contentEditable  onkeypress="if (window.event.keyCode==13){document.execCommand('formatblock', false, 'br');}" >
			</div>
			<input type="button" id="create_file" value="create file" class="btn btn-success"/>
		</div>
		<script>
			
			$('#create_file').click(function(){
				var title = $('#title').val();
				
				$.ajax({
					url:'<?php echo base_url()?>index.php/writer/createArticle',
					type:'post',
					data: {'html': $('#editeur').html(),
							'title': title
							},
					success: function(response){
						console.log(response);
					},
					error:function(){
						
					}
				});
			});
		</script>
	</div>
	</body>
</html>