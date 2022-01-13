<link rel="stylesheet" href="<?php echo css_url('time_line') ;?>"/>
<script src="<?php echo js_url('jquery-3.2.0.min');?>"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('.stp').bind("mouseover", function(){
				var color  = $(this).css("background-color");
				
				$(this).css("background-color", "#c7c7c7");
				switch(this.id){
					
					case "1": $('.timeline_StepName').text("القواعد الأساسية");break;
					case "2": $('.timeline_StepName').text("تقديم");break;
					case "3": $('.timeline_StepName').text('إجعل حاسوبك مستعدا');break;
					case "4": $('.timeline_StepName').text('خطواتك الأولى مع PHP');break;
					case "5": $('.timeline_StepName').text('لصق أجزاء من صفحات الواب');break;
					case "6": $('.timeline_StepName').text('المتغيراتles variables');break;
					case "7": $('.timeline_StepName').text('الظروف les conditions');break;
					case "8": $('.timeline_StepName').text('les boucles');break;
					case "9": $('.timeline_StepName').text('الدوال les fonctions');break;
					case "10": $('.timeline_StepName').text('الجداول les tableaux');break;
					case "11": $('.timeline_StepName').text('إرسال معطيات من صفحة إلى أخرى');break;
					case "12": $('.timeline_StepName').text('إرسال معطيات بـ URL');break;
					case "13": $('.timeline_StepName').text('إرسال معطيات بـ les formulaires');break;
					case "14": $('.timeline_StepName').text('أشغال تطبيقية صفحة محمية بـ كلمة عبور');break;
					case "15": $('.timeline_StepName').text('متغيرات كبرى و Sessions و cookies');break;
					case "16": $('.timeline_StepName').text('قراءة وكتابة صفحة');break;
					case "17": $('.timeline_StepName').text('تخزين معلومات في قاعدة بيانات');break;
					case "18": $('.timeline_StepName').text('تقديم في قواعد البيانات');break;
					case "19": $('.timeline_StepName').text('phpMyAdmin');break;
					case "20": $('.timeline_StepName').text('قراءة معطيات من قاعدة البيانات');break;
					case "21": $('.timeline_StepName').text('كتابة معطيات في قاعدة بيانات');break;
					case "22": $('.timeline_StepName').text('أشغال تطبيقية mini-chat');break;
					case "23": $('.timeline_StepName').text('دوال الـ SQL');break;
					case "24": $('.timeline_StepName').text('تواريخ الـ SQL');break;
					case "25": $('.timeline_StepName').text('أشغال تطبيقية مدونة مع تعليقات');break;
					case "26": $('.timeline_StepName').text('العلاقات بين الجداول les jointures');break;
					case "27": $('.timeline_StepName').text('إستخدام متقدم');break;
					case "28": $('.timeline_StepName').text('تصميم صور');break;
					case "29": $('.timeline_StepName').text('les expressions regulieres partie 1/2');break;
					case "30": $('.timeline_StepName').text('les expressions regulieres partie 2/2');break;
					case "31": $('.timeline_StepName').text('البرمجة العضوية la programmation orientée objet');break;
					case "32": $('.timeline_StepName').text('تنظيم الكود وفق هندسة MVC');break;
					case "33": $('.timeline_StepName').text('أشغال تطبيقية فضاء خاص بكل مستخدم');break;
					case "34": $('.timeline_StepName').text('ملحقات');break;
					case "35": $('.timeline_StepName').text('ضع موقعك في الويب');break;
					case "36": $('.timeline_StepName').text('الآن يمكنك التكويد بأريحية');break;
					case "37": $('.timeline_StepName').text('إستعمل la documentation ');break;
					case "38": $('.timeline_StepName').text('النجدة الكود لا يعمل');break;
					case "39": $('.timeline_StepName').text('حماية ملف بـ htaccess');break;
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
				<a href="<?php echo site_url('Php/les_bases'); ?>"><img id="start" height="30" width="30" src="<?=img_url('home.png');?>"/></a>


					<a class="stp" id="1" href="<?php echo site_url('Php/les_bases'); ?>"><?php if(isset($id1))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="2" href="<?php echo site_url('Php/introduction'); ?>"><?php if(isset($id2))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="3" href="<?php echo site_url('Php/preparer_son_ordinateur'); ?>"><?php if(isset($id3))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="4" href="<?php echo site_url('Php/premier_pas'); ?>"><?php if(isset($id4))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="5" href="<?php echo site_url('Php/inclure_de_portion_de_code'); ?>"><?php if(isset($id5))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="6" href="<?php echo site_url('Php/les_variables'); ?>"><?php if(isset($id6))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="7" href="<?php echo site_url('Php/les_conditions'); ?>"><?php if(isset($id7))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="8" href="<?php echo site_url('Php/les_boucles'); ?>"><?php if(isset($id8))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="9" href="<?php echo site_url('Php/les_fonctions'); ?>"><?php if(isset($id9))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="10" href="<?php echo site_url('Php/les_tableaux'); ?>"><?php if(isset($id10))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					
					<a class="stp" id="11" style="margin-left:10px" href="<?php echo site_url('Php/transmettre_des_donnees_de_page_en_page'); ?>"></a>
					<a class="stp" id="12" href="<?php echo site_url('Php/transmettre_des_donnees_avec_url'); ?>"></a>
					<a class="stp" id="13" href="<?php echo site_url('Php/transmettre_les_donnees_avec_les_formulaires'); ?>"></a>
					<a class="stp" id="14" href="<?php echo site_url('Php/tp_page_protegee_avec_mot_de_passe'); ?>"></a>
					<a class="stp" id="15" href="<?php echo site_url('Php/variables_superglobales_session_et_cookies'); ?>"></a>
					<a class="stp" id="16" href="<?php echo site_url('Php/lire_et_ecrire_dans_un_fichier'); ?>"></a>
					
					<a class="stp" id="17" style="margin-left:10px" href="<?php echo site_url('Php/stocker_des_informations_dans_une_base_de_donnees'); ?>"></a>
					<a class="stp" id="18" href="<?php echo site_url('Php/presentation_de_base_de_donnees'); ?>"></a>
					<a class="stp" id="19" href="<?php echo site_url('Php/phpmyadmin'); ?>"></a>
					<a class="stp" id="20" href="<?php echo site_url('Php/lire_des_donnees'); ?>"><?php if(isset($id20))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="21" href="<?php echo site_url('Php/ecrire_des_donnees'); ?>"></a>
					<a class="stp" id="22" href="<?php echo site_url('Php/tp_un_mini_chat'); ?>"></a>
					<a class="stp" id="23" href="<?php echo site_url('Php/les_fonction_sql'); ?>"></a>
					<a class="stp" id="24" href="<?php echo site_url('Php/les_dates_en_sql'); ?>"></a>
					<a class="stp" id="25" href="<?php echo site_url('Php/tp_un_blog_avec_des_commentaires'); ?>"></a>
					<a class="stp" id="26" href="<?php echo site_url('Php/les_jointures_entre_tables'); ?>"></a>
					
					<a class="stp" id="27" style="margin-left:10px" href="<?php echo site_url('Php/utilisation_avancee'); ?>"></a>
					<a class="stp" id="28" href="<?php echo site_url('Php/creer_des_images'); ?>"></a>
					<a class="stp" id="29" href="<?php echo site_url('Php/les_expressions_regulieres_partie_un'); ?>"></a>
					<a class="stp" id="30" href="<?php echo site_url('Php/les_expressions_regulieres_partie_deux'); ?>"></a>
					<a class="stp" id="31" href="<?php echo site_url('Php/la_programmation_orientee_objet'); ?>"><?php if(isset($id31))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="32" href="<?php echo site_url('Php/organiser_son_code_avec_architecture_mvc'); ?>"><?php if(isset($id32))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					<a class="stp" id="33" href="<?php echo site_url('Php/tp_creer_un_espace_membres'); ?>"><?php if(isset($id33))echo'<div class="triangle" style="visibility:visible"></div>';?></a>
					
					<a class="stp" id="34" style="margin-left:10px" href="<?php echo site_url('Php/annexe'); ?>"></a>
					<a class="stp" id="35" href="<?php echo site_url('Php/envoyer_votre_site_sur_le_web'); ?>"></a>
					<a class="stp" id="36" href="<?php echo site_url('Php/codez_proprement'); ?>"></a>
					<a class="stp" id="37" href="<?php echo site_url('Php/utilisez_la_documentation'); ?>"></a>
					<a class="stp" id="38" href="<?php echo site_url('Php/au_secours_mon_script_plante'); ?>"></a>
					<a class="stp" id="39" href="<?php echo site_url('Php/proteger_un_dossier_avec_htaccess'); ?>"></a>


					<a class="stp" id="11" href="<?php echo site_url('Course/les_date_en_sql'); ?>"></a>

				<img id="end" height="30" width="30" src="<?=img_url('reward.png');?>"/>
			</div>
		</center>
	</div>	
