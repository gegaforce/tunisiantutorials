<style>

.title_princ{
	display: inline-block;
	color:#fff;
   font-family: 'DroidArabicKufiRegular'; 
	font-size: 2.25rem;
    line-height: 2.25rem;
	margin:auto;
	font-weight: bold;
}
.arbre{
   font-family: 'DroidArabicKufiRegular'; 

	color:#fff;
	position: absolute;
	font-size: 1.25rem;
	font-weight: bold;
}
.flex-container {
  display: flex;
  background-image: linear-gradient(to right, #f11414, #821010);
  direction:rtl;
  width:100%;
	height:174px;
	text-align:center;
}

.flex-container > div {
  background-color: #ffff1f;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.breadcrumb__separator{
	
}
nav{
	padding-top:10px;
}
</style>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>


<div class="flex-container">
	<nav class="arbre">
		الرئيسية
		<span class="breadcrumb__separator"> > </span>
		الدروس
		<span class="breadcrumb__separator"> > </span>
		<?php echo $title;?>
		<span class="breadcrumb__separator"> > </span>
		<?php echo $selected;?>
	</nav>
	<p class ="title_princ"><?php echo $title;?></p>
</div>
<style>
#start{
	border-radius:100%;
}
#end{
	border-radius:100%;
}
</style>

	<div dir= "rtl" class="time_line">
		<center><span id='timeline_StepName' class='timeline_StepName'></span></center>
	</div>
	<div dir= "rtl" class="time_line_container">
			<div id="step">
				<a href="<?php echo site_url('index.php/course/tabeOfContent/'.urlencode($title)); ?>"><img id="start" height="30" width="30" src="<?=img_url('home.png');?>"/></a>

<?php 
$course ='';
$numero="";
//var_dump($query);die;
$i =0;
$this_id =0;
$numero_chapter =1;

foreach($chapters as $value) 
    { 
					echo'<a class="stp" id="'.$i.'" href="'.site_url('index.php/course/cours/'.urlencode($title).'/'.urlencode($value['chapter']).'/'.urlencode($value['paragraph'])).'">';
					if($selected == $value['paragraph']){
						echo'<div class="triangle" style="visibility:visible"></div>';
						 $course = $title;
						// $numero = $value['numero_paragraph'];
						// $numero_chapter = $value['numero_chapter'];
						$this_id = $i;
						?>
						<script>
							$(document).ready(function() {
							$('#<?php echo $i;?>').css("background-color", "#c7c7c7");					
							});						
						</script>
						<?php
					}
						
					echo'</a>';
					if($value['numero_chapter'] != $numero_chapter++){
						?>
						<script>
							$(document).ready(function() {
							$('#<?php echo $i;?>').css("margin-right", "6px");					
							});	
							
						</script>
						<?php
					}
					$numero_chapter = $value['numero_chapter'];
				$i++;	
	
    } 
	echo '<input type = "hidden" id = "selected" value="'.$selected.'"></type>';
	?>
 


				<img id="end" height="30" width="30" src="<?=img_url('reward.png');?>"/>
			</div>
		
		<!--<span dir="rtl" class='timeline_StepName'>أنتم هنا: <?php// echo $course.' <b>></b> '.$selected; ?></span>-->
	</div>	


<script>
$(document).ready(function() {
		var data = <?php echo json_encode($chapters); ?>;
		var nbre_chapter = <?php echo $numero_chapter;?>;
		nbre_chapter--;
		//console.log(data.length);
		var width = (1231 - 60- (nbre_chapter*6)) / data.length;
		//console.log(nbre_chapter);
		$('.stp').css("width", width);
		var marginleft = (width / 2) - 6;
		$('.triangle').css("margin-left", marginleft);
		var color  = $('.stp').css("background-color");
			$('.stp').bind("mouseover", function(){

					var key = this.id;
					
					$(this).css("background-color", "#c7c7c7");
					$('#timeline_StepName').html(data[key].paragraph);
			});					
			$('.stp').bind("mouseout", function(){
				//alert(color);
				//var triangle  = $('.triangle').attr('visibility','visible');
				id = $(this).attr("id");
				selector = <?php echo $this_id;?>;
				if(id==selector){
					$(this).css("background-color", "#c7c7c7");
				}else{
					$(this).css("background-color", "#ececec");
				}
					
					//$('#<?php echo $numero.$numero_chapter;?>').css("background-color", "#c7c7c7");
					$('#timeline_StepName').text('');
				});
	
					
										
				
					
});
</script>
<?php //var_dump($query);die;
?>
<?php
// echo json_encode($query);
 ?>