<link rel="stylesheet" href="<?php echo css_url('time_line') ;?>"/>
<script src="<?php echo js_url('jquery-3.2.0.min');?>"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('.stp').bind("mouseover", function(){
				var color  = $(this).css("background-color");
				
				$(this).css("background-color", "#c7c7c7");
				switch(this.id){
					
					case "1": $('.timeline_StepName').text("العلاقة One-To-One");break;
					case "2": $('.timeline_StepName').text("العلاقة Many-To-One");break;

				}
				$(this).bind("mouseout", function(){
					$(this).css("background-color", color);
					$('.timeline_StepName').text('');
				});
				$(this).bind("click", function(){
				});
				
			});    
		});

</script>



	<div class="time_line">
		<center><span class="timeline_StepName" id='timeline_StepName'></span></center>
	</div>
	<div class="time_line_container">
		<center>
			<div id="step" dir="rtl">
				<a href="<?php echo site_url('symfony/relationonetoone'); ?>"><img id="start" height="30" width="30" src="<?=img_url('home.png');?>"/></a>


					<a class="stp" id="1" href="<?php echo site_url('symfony/relationonetoone'); ?>"></a>
					<a class="stp" id="2" href="<?php echo site_url('symfony/relationmanytoone'); ?>"></a>
					
				<img id="end" height="30" width="30" src="<?=img_url('reward.png');?>"/>
			</div>
		</center>
	</div>	
