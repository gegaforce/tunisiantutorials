<a href="<?php echo base_url() ?>Article/intelligence_artificielle">
	<div class="panel panel-default">
	  <div class="panel-body text-center">
		<img src="<?= img_url('ia/4.jpg')?>" height="162" width="254">
	  </div>
	  <div class="panel-footer"><p>الذكاء الإصطناعي... نحو آلة قادرة على التفكير كالبشر</p></div>
	</div>
</a>
<a href="<?php echo base_url() ?>Article/frontend_before_coding">
	<div class="panel panel-default">
	  <div class="panel-body text-center">
		<img src="<?= img_url('frontend/2.jpg')?>" height="162" width="254">
	  </div>
	  <div class="panel-footer"><p>إبدأ بتصميم الواجهة قبل البرمجة</p></div>
	</div>
</a>
<?php
	$i=0;
	foreach($file as $value ){
		$path_parts = pathinfo($value);
	?>
		<a id="a<?php echo $i;?>" href="<?php echo site_url('Article/article/'.$path_parts['filename']); ?>">
			<div class="panel panel-default">
			  <div class="panel-body text-center">
				<img id="img<?php echo $i;?>"src="<?= img_url("agileinlines/$i.jpg")?>" height="162" width="254">
				<p id='description<?php echo $i;?>' style='display:none;margin-top:-160px'>لننسى أنك مطور ( لدقائق معدودة ) وتخيل أنك صاحب مشروع كبير ولديك المال المناسب لهذا المشروع, السؤال المهم الأن : ماهو الشيء الذي يجعلك تثق في ان الفريق يعمل ويسير في الإتجاه الصحيح ؟</p>
			  </div>
			  <div class="panel-footer"><p><?php echo urldecode($path_parts['filename']);?></p></div>
			</div>
		</a>
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

<a href="<?php echo base_url()?>Article/coding">
	<div class="panel panel-default">
	  <div class="panel-body text-center">
		<img src="<?= img_url('coding/1.jpg')?>" height="162" width="254">
	  </div>
	  <div class="panel-footer"><p>ما يجب أن تعرفه عن البرمجة سواء كنت مبتدأ أو محترفا</p></div>
	</div>
</a>


