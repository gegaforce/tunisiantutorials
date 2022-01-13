<link rel="stylesheet" href="<?php echo css_url('time_line') ;?>"/>
<script src="<?php echo js_url('jquery-3.2.0.min');?>"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('.stp').bind("mouseover", function(){
				var color  = $(this).css("background-color");
				
				$(this).css("background-color", "#c7c7c7");
				switch(this.id){
					case "1": $('.timeline_StepName').text("إضافة فضاء خاص بكل مستخدم");break;
					case "2": $('.timeline_StepName').text('الدخول الى الموقع');break;
					case "3": $('.timeline_StepName').text('Fonctionnement');break;
					case "4": $('.timeline_StepName').text('Preparer son environnememnt de travail');break;
					case "5": $('.timeline_StepName').text('Ecrire son premier script');break;
					case "6": $('.timeline_StepName').text('Configurer PHP pour visualiser les erreurs');break;
					
					case "7": $('.timeline_StepName').text('Les variables');break;
					case "8": $('.timeline_StepName').text('Les boucles');break;
					case "9": $('.timeline_StepName').text('Les tableaux');break;
					case "10": $('.timeline_StepName').text('Les fonctions');break;
					case "11": $('.timeline_StepName').text('أساسيات PHP');break;
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
			<div id="step" dir="rtl">
				<a href="<?php echo site_url('Course/accueil'); ?>"><img id="start" height="30" width="30" src="<?=img_url('home.png');?>"/></a>

					<a class="stp" id="1" href="<?php echo site_url('Course/ajouter_un_espace_membre'); ?>"><div class="triangle"  style="visibility:visible"></div></a>
					<a class="stp" id="2" href="<?php echo site_url('Course/fonctionnement_d_un_site_ecrit_en_php'); ?>"><div class="triangle" id="t2"></div></a>
					<a class="stp" id="3" href="<?php echo site_url('Course/preparer_son_environnement_de_travail'); ?>"><div class="triangle"></div></a>
					<a class="stp" id="4" href="<?php echo site_url('Course/ecrire_son_premier_script'); ?>"><div class="triangle"></div></a>
					<a class="stp" id="5" href="<?php echo site_url('Course/Configurer_PHP_pour_visualiser_les_erreurs'); ?>"><div class="triangle"></div></a>
					 
					<a class="stp" id="7" style="margin-left:10px" href="<?php echo site_url('Course/les_variables'); ?>"><div class="triangle"></div></a>
					<a class="stp" id="8" href="<?php echo site_url('Course/les_conditions'); ?>"></a>
					<a class="stp" id="9" href="<?php echo site_url('Course/les_boucles'); ?>"></a>
					<a class="stp" id="10" href="<?php echo site_url('Course/les_tableaux'); ?>"></a>
					<a class="stp" id="11" href="<?php echo site_url('Course/les_bases_php'); ?>"></a>

				<img id="end" height="30" width="30" src="<?=img_url('reward.png');?>"/>
			</div>

	</div>

	

	<div class="tableOfContent">
		<ul dir="rtl">
			<li><a href="#">تصميم موقع الويب الخاص بك مع PHP و MySQL</a></li>
			<li><a href="#">أساسيات PHP</a></li>
			<li><a href="#">نقل البيانات صفحة إلى أخرى</a></li>
			<li><a href="#">تخزين المعلومات في قاعدة بيانات</a></li>
			<li><a href="#">  استخدام متقدم لـPHP</a></li>
		</ul>
	</div>
	
	<article style="text-align:center;">
	  <p dir="rtl">صمّم موقعك بـ PHP و MySQL:<br>

		هل قمت بإنجاز موقعك بـ HTML و تريد إضافة المزيد من الخصائص؟<br>
		مثل إضافة فضاء خاص بكل مستخدم؟ <br>
		إتبع هذا الدرس الذي سيعلمك كيف تقوم بإضافة عضو ليتفاعل مع الموقع ؟<br>
		قبل البدأ يجب أن تنشأ قاعدة بيانات MySQL.<br>
		إختر لها إسما مثل mydatabase ثم أضف table جديد سمّه contact<br>
		يجب أن يدرج لنا المستخدم بعض المعطيات كالـميل (mail)وكلمة العبور(password) و اسم المستخدم(pseudo).<br>
		لذلك يجب إضافة attributs التالية الى جدول contact:<br>
		Pseudo نوع String عدد الحروف 10<br>
		Mail نوع String عدد الحروف 255<br>
		Password نوع Password عدد الحروف 255<br>
		و يجب إضافة صفحة جديدة خاصة بالـ form سمّها form.php <br>
		ثانيا أضف صفحة أخرى لحفظ معطيات المستخدم سمّها saveNewcontact.php<br>
		الكود كالتالي:<br>
		صفحة: form.php<br>
		//contact form<br>
		<div class="code" id="code_form" onClick="selectText('code_form')"></div>
		</p>

		<p>صفحة: saveNewContact.php </p>
		<div class="code" id="code_saveNewContact" onClick="selectText('code_saveNewContact')"></div>
		<p><br>
		الدخول الى الموقع: login<br>
		كما فعلنا في تسجيل الدخول الأن سننجز صفحة الدخول الى الموقع login <br>
		الكود كالتالي:<br>
		صفحة: login.php<br>
		//login form<br>


		</p>
	</article>

	
