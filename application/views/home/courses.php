


<?php
//var_dump($courses);die;
$i = 0;
foreach($courses as $value){
	$title = $value['title'];
	$logo = $value['logo'];
	//$logo = $value['logo'];
	?>
	<a href="<?php echo site_url('index.php/course/tabeOfContent/'.urlencode($title)); ?>">
	<div class="panel panel-default">
	  <div class="panel-body text-center">
		<img src="<?= img_url('logos/'.$logo)?>" height="162" width="254">
	  </div>
	  <div class="panel-footer"><p><?php echo $value['title'];?></p></div>
	</div>
</a><?php
$i++;
}

?>