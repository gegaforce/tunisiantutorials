
<div class="tableOfContent" id ="tableOfContent">
	<ul dir="rtl">
		<?php
		//var_dump($chapters);die;
		foreach ( $query as $value){
			echo '<li><a href="#">'.$value['chapter'].'</a> ';
				foreach($chapters as $sub){
				echo '<ul>';
					if($value['chapter'] == $sub['chapter'])
					echo '<li class="list_gauche"><a href="'.site_url('index.php/course/cours/'.urlencode($title).'/'.urlencode($sub['chapter']).'/'.urlencode($sub['paragraph'])).'">'.$sub['paragraph'].'</a><li>';
				echo '</ul>';
				}
			echo '</li>';

		}
		
		?>
	</ul>
</div>