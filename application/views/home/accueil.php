
		<title>tunisian tutorials</title>
			<script type="text/javascript">
				var image1=new Image();
				image1.src="<?= img_url('14.jpg')?>";
				var image2=new Image();
				image2.src="<?= img_url('15.jpg')?>";
				var image3=new Image();
				image3.src="<?= img_url('16.jpg')?>";
				</script>

	<div class="slider">
			<div class="flech-left">
				<img class="left" src="<?= img_url('flech_left.png')?>" >
			</div>

				<img src="<?= img_url('14.jpg')?>" name="slide" width="944" height="327"/>
				<script type="text/javascript">
				<!--
				var step=1;
				function slideit(){
					document.images.slide.src=eval("image"+step+".src");
					if(step<3)
						step++;
					else
						step=1;
						setTimeout("slideit()",2500);
				}
				slideit();
				</script>
			<div class="flech-right">
				<img class="right" src="<?= img_url('flech_droite.png')?>" >
			</div>
	</div>
	
	<div class="list_videos">
		<center>
			<a href="read.html">
				<div class="videos_div">
					<div class="reader">
						<img  src="<?= img_url('reader.png')?>">
					</div>
					<div class="comment">
						<p>
							java courses for beginners
						</p>
					</div>
				</div>
			</a>
			<a href="read.html">
				<div class="videos_div">
					<div class="reader">
						<img  src="<?= img_url('reader.png')?>">
					</div>
					<div class="comment">
						<p>
							C courses for beginners
						</p>
					</div>
				</div>
			</a>
			<a href="read.html">
				<div class="videos_div">
					<div class="reader">
						<img  src="<?= img_url('reader.png')?>">
					</div>
					<div class="comment">
						<p>
							C# courses for beginners
						</p>
					</div>
				</div>

		</center>
	</div>	
