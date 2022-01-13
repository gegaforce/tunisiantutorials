<?php
$i=0;
foreach($cours as $value){
	$title = $value['title'];
	$logo = $value['logo'];
	$definition = $value['definition'];

	echo'<a id="a'.$i.'"href="'.site_url('index.php/course/tabeOfContent/'.urlencode($title)).'">';
	echo '<div class="panel panel-default">';
	 echo ' <div class="panel-body text-center">';
	echo'	<img id="img'.$i.'" src="'.img_url("logos/".$logo).'" height="162" width="254">';
	echo '	<p id="description" style="display:none;margin-top:-160px">'.$definition.'</p>';

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