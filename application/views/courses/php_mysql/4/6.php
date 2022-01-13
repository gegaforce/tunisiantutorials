<script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script><article>  <script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>  <script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>  <script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>  <script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>  <script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>  <script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
				<script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script> 
				<script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script> 
				<script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script> إنشاء فضاء الأعضاء بالموقع<br>في كل موقع يستعمل فضاء الأعضاء تجد ثلاث صفحات<br>- صفحة التسجيل بالموقع<br>&nbsp;-صفحة الدخول إلى الموقع<br>&nbsp;- صفحة الخروج من الموقع<br>يمكن أيضا إضافة صفحات أخرى مثل صفحة تغيير فضاء العضو, على الأقل يجب أن نقوم بإنجاز الصفحات الثلاثة الأولى.<br>الصورة التالية تصف مراحل حياة العضو من زيارة الموقع إلى التفاعل ثم الخروج.<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img class="image_editeur" src="  http://www.tunisiantutorial.byethost7.com/assets/images/vie_membre.png"><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; مراحل حياة عضو<br>قبل كل شيء سنقوم بإنشاء جدول MySQL لحفظ أعضاء الموقع:<br>جدول الأعضاء<br>بماذا يتميز العضو؟<br>سنرى مانحتاج إليه لحفظ عضو في هذا الجدول.<br>نحتاج إلى :<br>- إسم مستخدم<br>&nbsp;- كلمة عبور<br>&nbsp;- عنوان إلكتروني<br>&nbsp;- تاريخ الحفظ.<br>إذن أدعوك إلى إنشاء جدول بعنوان membre&nbsp; مع الحقول التالية:<br>;&nbsp; (&nbsp; id&nbsp; (int ,&nbsp; &nbsp;primary ,&nbsp; &nbsp;auto_increment<br>;&nbsp; (pseudo&nbsp; &nbsp;(varchar 255<br>;&nbsp; (pass&nbsp; &nbsp; (varchar 255<br>;&nbsp; (email&nbsp; &nbsp; (varchar 255<br>;&nbsp; (date_inscription&nbsp; &nbsp; (date<br>هكذا سيكون جدول membre إذا قمت بإدخاله على المتصرف phpMyAdmin<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img class="image_editeur" src="  http://www.tunisiantutorial.byethost7.com/assets/images/erererr.PNG"><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;حقول جدول membre<br><br><div class="information_editor"><p>إذا كنت تريد إلحاق أعضاءك بمجموعات مختلفة, يجب أن تنشأ جدول MySQL تسميه groupe أين يوجد كل المجموعات مثل ( المدراء, المشاركون, العمال...) ثم تضيف حقل أخر لـجدول membre&nbsp; تسميه groupe_id الذي يسجل رقم id&nbsp; للمجموعة في جدول groupe ذلك يسمح لك بإنجاز مرحلة (jointure) بين الجدولين membre و groupe</p></div><br><br> 
				<script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>  
<script class="script" id="script10">
var editor10 = ace.edit("code_insert10");
editor10.setFontSize(18);
editor10.renderer.setScrollMargin(10, 10, 10, 10);
editor10.setTheme("ace/theme/monokai");
editor10.session.setMode("ace/mode/php");
editor10.setAutoScrollEditorIntoView(true);
editor10.setOption("maxLines", 100);
editor10.setReadOnly(false);
value10 = editor10.getValue();
lang10 = "php";
</script>

<script class="script" id="script3">
var editor3 = ace.edit("code_insert3");
editor3.setFontSize(18);
editor3.renderer.setScrollMargin(10, 10, 10, 10);
editor3.setTheme("ace/theme/monokai");
editor3.session.setMode("ace/mode/php");
editor3.setAutoScrollEditorIntoView(true);
editor3.setOption("maxLines", 100);
editor3.setReadOnly(false);
value3 = editor3.getValue();
lang3 = "php";
</script>
			 			 			 			 			</article>