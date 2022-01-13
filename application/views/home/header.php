		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

		<link rel="icon" href="<?php echo img_url('t.png')?>"sizes="15x5"/>
		<title>
			<?php 
				if(isset($title_header)){
					echo $title_header." - ";
				}
				if(isset($title)){
					echo $title." - ";
				}
			?>
			tunisian tutorials
		</title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
		<link rel="stylesheet" href="<?php echo css_url('feuille')?>"/>
		<link rel="stylesheet" href="<?php echo css_url('time_line') ;?>"/>
		
		<script type="text/javascript" src="<?php echo js_url('jquery-3.2.0.min')?>"></script>
		<script type="text/javascript" src="<?php echo js_url('bootstrap.min')?>"></script>
		
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap-theme.min'); ?>">

		<!---->

		<script src="<?php echo js_url('ace-builds-master/src-noconflict/ace');?>" type="text/javascript" charset="utf-8"></script>
		
<style>
.dropbtn {
     color: white;
    
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
	float:left;
	margin-left:12px;
	margin-top:5px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f8f8f8;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	margin-top:50px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
.button{
}
.pin:after{
	content: ' ';
    display: block;
    position: absolute;
	top:0;
	left:0;
    width: 0;
    height: 0;
    margin: 0 auto;
    border: solid 5px transparent;
    border-bottom-color: #fff;
	margin-top:5px;
	margin-left:15px;
}
</style>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<?php
if(isset($page_de_inscription)){
	//rien
}else{
echo'	
		<div style="direction:rtl;margin-right:50px;">
			<li><a href='.site_url("home/conn").'>دخول</a></li>
				<li><a href='.site_url('home/inscription').'>تسجيل</a></li>
		</div>';
}
?>
<nav class="navbar navbar-default">

    <!-- Collect the nav links, forms, and other content for toggling -->
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!--
			<form class="navbar-form navbar-left float-right">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="إبحث في الموقع بالعربي" style="width:100px;">
				</div>
				
			</form> -->
		<?php
			if(isset($_SESSION['mail']) && $_SESSION['mail'] != null){
				echo'
					<div class="dropdown">
					<img onclick="myFunction()" src ="'.img_url('membre.png').'" height="36" width="36"  style="float:left;border-radius:100%;" class="dropbtn"/>
					
						<div id="myDropdown" class="dropdown-content pin ecriture">
						<a href="#home">إسم المستخدم</a>
						<a href="#about">لوحة القيادة</a>
						<a href="#contact">الإعدادات</a>
						<a href="#home">أكتب درس</a>
						<a href="#about">أكتب مقال</a>
						<a href="#contact">أضف فيديو</a>
						<a href="#home">أضف مشروع</a>
						<a href="#home">أضف تصميم</a>
						<a href="#about">الرسائل</a>
						<a href="#contact">الإشعارات</a>
						<a href="'.site_url('membre/deconnexion').'">خروج</a>
					  </div>
					</div>				
				';
			}
		
if(isset($page_de_inscription)){
	
}else{
	echo "<ul class='nav navbar-nav'>"?>
				<li><a href="<?= site_url('premium/affiche');?>">emploi</a></li>
				<li><a href="<?= site_url('premium/affiche');?>">premium</a></li>
				<li><a href="<?= site_url('home/concepts');?>">متجر التصاميم</a></li>
				<li><a href="<?= site_url('project/afficherProject');?>">المشاريع</a></li>
				<li><a href="<?= site_url('home/videos');?>">الفيديوهات</a></li>
				<li><a href="<?= site_url('home/forum');?>">المنتدى</a></li>        
				<li><a href="<?= site_url('home/articles');?>">المقالات</a></li>
				<li><a href="<?=  site_url('home/courses');?>">الدروس</a></li>
 			</ul>
<?php }?>
			
			
						
			<div class="navbar-header "  style="float:right;">
				<a class="" href ="<?php echo site_url('Home/accueil') ?>">
					<img width="150px" height="50px" src="<?php echo img_url('logo.png')?>" alt="tunisian tutorials"/>
				</a>
			</div>
			
	</div><!-- /.navbar-collapse -->
    
</nav>
