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

<center>
	<div class="time_line">
		<center><span class="timeline_StepName" id='timeline_StepName'></span></center>
	</div>
	<div class="time_line_container">
			<div id="step" dir="rtl">
				<a href="<?php echo site_url('Course/accueil'); ?>"><img id="start" height="30" width="30" src="<?=img_url('home.png');?>"/></a>

					<a class="stp" id="1" href="<?php echo site_url('Course/ajouter_un_espace_membre'); ?>"><div class="triangle" ></div></a>
					<a class="stp" id="2" href="<?php echo site_url('Course/fonctionnement_d_un_site_ecrit_en_php'); ?>"><div class="triangle" id="t2"></div></a>
					<a class="stp" id="3" href="<?php echo site_url('Course/preparer_son_environnement_de_travail'); ?>"><div class="triangle"></div></a>
					<a class="stp" id="4" href="<?php echo site_url('Course/ecrire_son_premier_script'); ?>"><div class="triangle"></div></a>
					<a class="stp" id="5" href="<?php echo site_url('Course/Configurer_PHP_pour_visualiser_les_erreurs'); ?>"><div class="triangle"></div></a>
					 
					<a class="stp" id="7" style="margin-left:10px" href="<?php echo site_url('Course/les_variables'); ?>"><div class="triangle" style="visibility:visible"></div></a>
					<a class="stp" id="8" href="<?php echo site_url('Course/les_conditions'); ?>"></a>
					<a class="stp" id="9" href="<?php echo site_url('Course/les_boucles'); ?>"></a>
					<a class="stp" id="10" href="<?php echo site_url('Course/les_tableaux'); ?>"></a>

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
		<article>
<p style="text-align: right;">القواعد الأساسية لـ PHP:</p>
<p style="text-align: right;">المتغيرات les variables:</p>
<p style="text-align: right;">تتميز المتغيرات في PHP بـ "القيمة" و"الإسم"</p>
<p style="text-align: right;">$nom_de_varible = valeur_de_variable</p>
<p style="text-align: right;">مثال:</p>
<p style="text-align: right;">$ages = 17 ans</p>
<p style="text-align: right;">&nbsp;"$age " هو الإسم</p>
<p style="text-align: right;">و"17 ans " هي القيمة</p>
<p style="text-align: right;">نلاحظ هنا أن المتغير $age يسجل القيمة "17 ans" حيث يمكن&nbsp; تغييرهاوالقيام بعمليات عليها وعندما نكون في حاجة إليها نناديها بإسمها</p>
<p style="text-align: right;">أنواع المتغيرات:</p>
<p style="text-align: right;">-سلسلة من الحروف chaine de caract&egrave;res (String)</p>
<p style="text-align: right;">مثل "mon age est 24"</p>
<p style="text-align: right;">- الأرقام les nombres entiers(int)</p>
<p style="text-align: right;">مثل 234</p>
<p style="text-align: right;">- الأعداد العشرية les nombres decimaux(float)</p>
<p style="text-align: right;">مثل 13,56</p>
<p style="text-align: right;">- المنطقية boolean(true or false)</p>
<p style="text-align: right;">- الخانة الفارغة NULL</p>
<p style="text-align: right;">أحيانا نحتاج متغيرات لا تحتوي على قيمة.</p>
<p style="text-align: right;">تعيين قيمة لمتغير:</p>
<p style="text-align: left;">&lt;?php</p>
<p style="text-align: left;">$mon_age = 23&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">اسم المتغير mon_age</p>
<p style="text-align: right;">قيمته: 23</p>
<p style="text-align: right;">ملاحظة:الرمز "دولار" &lsquo;$&rsquo; يكون دائما قبل إسم المتغير.</p>
<p style="text-align: right;">الرمز يساوي "=" يعني قيمة المتغير.&nbsp;</p>
<p style="text-align: right;">";" يعني إنتهاء السطر البرمجي.</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: left;">&lt;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age = 17&nbsp;; //يتم إنشاء المتغير وقيمته 17</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age = 23&nbsp;; //يتم تغير قيمة المتغير إلى 23</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age = 42&nbsp;; //يتم تغيير قيمة المتغير إلى 42</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">إستخدام أنواع البيانات:</p>
<p style="text-align: right;">نوع String</p>
<p style="text-align: left;">&lt;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nom_visiteur = "Ahmed"&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nom_visiteur = &lsquo;Ahmed&rsquo;&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">ملاحظة: نلاحظ إختلاف المعقفات "و'</p>
<p style="text-align: right;">إذا أردنا إضافة ' إلى سلسلة الحروف.</p>
<p style="text-align: left;">&lt;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nom_visiteur = "Mon \"nom\" est Ahmed" ;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nom_visiteur = &lsquo;Je m\&rsquo;appelle Ahmed&rsquo; ;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">او بإختصار:</p>
<p style="text-align: left;">&lt;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nom_visiteur&nbsp;= "Mon &lsquo;nom&rsquo; est Ahmed"&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nom_visiteur = &lsquo;Mon "nom" est Ahmed"&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">نوع int:</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age_de_visiteur = 17&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;">نوع عدد عشري (float):</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">$poids = 58.98&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">نوع boolean:</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $je_suis_un_etudiant = true&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $je_suis_un_bon_eleve = false&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">نوع الخانة الفارغةNULL:</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $pas_de_valeur = NULL&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">عرض وتسلسل المتغيرات: concat et affiche des variables</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age = 17&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; echo $age&nbsp;;// عرض المتغير 17</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age = 17&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; echo " =&nbsp;le visiteur a "&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; echo = $age&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; echo = "ans"&nbsp;.;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">الأخير يظهر لناالجملة التالية:</p>
<p style="text-align: right;">Le visiteur a 17 ans.</p>
<p style="text-align: right;">تسلسل الكلمات:</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age =17&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; echo "le visiteur a $age ans."&nbsp;;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">أو</p>
<p style="text-align: left;">&lt; ?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $age =17 ;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; echo 'le visiteur a.' $age. 'ans.' ;</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">عمليات حسابية بسيطة</p>
<p style="text-align: right;">الجمع +</p>
<p style="text-align: right;">الطرح &ndash;</p>
<p style="text-align: right;">القسمة /</p>
<p style="text-align: right;">الضرب *</p>
<p style="text-align: left;">&lt;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre = 4+5&nbsp;;//nbre = 9</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre = 5-3&nbsp;;//nbre = 2</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre = 6 / 2&nbsp;;//nbre = 3</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre = 5 * 5&nbsp;;//nbre 25</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre =&nbsp;4 * 5 + 2;//nbre = 22</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre =&nbsp;(1 + 3) * 4;//nbre = 12</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; //</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre = 10&nbsp;;</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $resultat = ($nbre+4) * $nbre&nbsp;;// $resulat = 140</p>
<p style="text-align: left;">?&gt;</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;">Le modulo:</p>
<p style="text-align: left;">&lt;&nbsp;?php</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre = 10%5&nbsp;;//nbre = 0</p>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp; $nbre = 10% 3&nbsp;;//nbre = 1</p>
<p style="text-align: left;">?&gt;</p>
	</article>
