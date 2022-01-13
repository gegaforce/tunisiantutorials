<article>          
				 
				         قراءة المعلومات من قاعدة البيانات MySQL<br>أولا يجب التواصل مع قاعدة البيانات<br>يجب على PHP&nbsp; التواصل مع قاعدة البيانات عن طريق <b>إسم مستخدم</b> و <b>كلمة عبور</b>&nbsp;.<br><br><div class="question_editor"><p>كيف نتواصل مع قاعدة البيانات؟</p></div><br>PHP يستعمل ثلاث طرق للتواصل مع قاعدة البيانات:<br>- _mysql&nbsp; هي وظائف للتواصل مع قاعدة بيانات MySQL<br>- _mysqli هي وظائف محسنة للتواصل مع قاعدة بيانات MySQL<br>- PDO هي أداة كاملة للتواصل مع أي نوع من قواعد البيانات مثل MySQL أو PostgeSQL أو Oracle.<br><br><div class="question_editor"><p>أي نوع نختار من هؤلاء الثلاثة؟</p></div>سنختار PDO لأنه الأداة التي يمكن إستعمالها في الإصدارات القادمة لـ PHP.<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img class="image_editeur" width="680" height="463" src="  http://www.tunisiantutorial.byethost7.com/assets/images/pdo2.png"><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PDO يسمح بالتواصل مع أي نوع من قواعد البيانات.<br> <br>أولا يجب أن تشغل الـ PDO<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img class="image_editeur" width="151" height="104" src="  http://www.tunisiantutorial.byethost7.com/assets/images/pdot.PNG"><br>إضغط على الزر الأيمن من الفأرة على أيقونة وومبسرفر في الـ barre de tache&nbsp;<br>إذهب الى PHP ثم Extension وسترى انه تم إضافة php_pdo_mysql<br><br><div class="question_editor"><p>وماذا لو كنت لا أستعمل وومبسرفر؟</p></div><br>في هذه الحالة يجب أن تذهب الى ملف php.ini وابحث عن السطر الذي يحتوي على php_pdo_mysql<br>ثم قم بإزالة النقطة الفاصلة.<br>كما يلي<br><br><div dir="ltr" id="code_insert8" class=" ace_editor ace_dark ace-monokai" style="font-size: 18px; height: 130px;" draggable="false"><textarea class="code" id="code_insert8">;extension=php_pdo_firebird.dll
;extension=php_pdo_mssql.dll
extension=php_pdo_mysql.dll
;extension=php_pdo_oci.dll
;extension=php_pdo_odbc.dll</textarea></div><button class="button" value="code_insert8" id="button8" style="display: none;">supprimer</button><br>الآن , بعد تشغيل الـ PDO سنتواصل مع قاعدة البيانات&nbsp;<br>سنحتاج الى أربعة معلومات:<br>* إسم الهوت : نحن الآن نعمل على الحاسوب الشخصي يعني في الـ local هنا الهوت هو localhost<br>* إسم القاعدة: هو إسم قاعدة البيانات التي نريد التواصل معها&nbsp;<br>* إسم المستخدم: يسمح لك بالتعريف بنفسك وهو نفس الإسم الذي تستخدمه في سرفر FTP<br>* كلمة العبور: هي نفس كلمة العبور في سرفر FTP<br>إسم المستخدم في العادة هو الـ ROOT<br><br><div dir="ltr" id="code_insert1" class=" ace_editor ace-monokai ace_dark" style="font-size: 18px; height: 86px;"><textarea class="code" id="code_insert1">&lt;?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
?&gt;</textarea></div><button class="button" value="code_insert1" id="button1" style="display: none;">supprimer</button><br> 			 			
<script class="script" id="script8">
var editor8 = ace.edit("code_insert8");
editor8.setFontSize(18);
editor8.renderer.setScrollMargin(10, 10, 10, 10);
editor8.setTheme("ace/theme/monokai");
editor8.session.setMode("ace/mode/php");
editor8.setAutoScrollEditorIntoView(true);
editor8.setOption("maxLines", 100);
editor8.setReadOnly(false);
value8 = editor8.getValue();
lang8 = "php";
</script>

<script class="script" id="script8">
var editor8 = ace.edit("code_insert8");
editor8.setFontSize(18);
editor8.renderer.setScrollMargin(10, 10, 10, 10);
editor8.setTheme("ace/theme/monokai");
editor8.session.setMode("ace/mode/php");
editor8.setAutoScrollEditorIntoView(true);
editor8.setOption("maxLines", 100);
editor8.setReadOnly(false);
value8 = editor8.getValue();
lang8 = "php";
</script>

<script class="script" id="script8">
var editor8 = ace.edit("code_insert8");
editor8.setFontSize(18);
editor8.renderer.setScrollMargin(10, 10, 10, 10);
editor8.setTheme("ace/theme/monokai");
editor8.session.setMode("ace/mode/php");
editor8.setAutoScrollEditorIntoView(true);
editor8.setOption("maxLines", 100);
editor8.setReadOnly(false);
value8 = editor8.getValue();
lang8 = "php";
</script>

<script class="script" id="script8">
var editor8 = ace.edit("code_insert8");
editor8.setFontSize(18);
editor8.renderer.setScrollMargin(10, 10, 10, 10);
editor8.setTheme("ace/theme/monokai");
editor8.session.setMode("ace/mode/php");
editor8.setAutoScrollEditorIntoView(true);
editor8.setOption("maxLines", 100);
editor8.setReadOnly(false);
value8 = editor8.getValue();
lang8 = "php";
</script>

<script class="script" id="script8">
var editor8 = ace.edit("code_insert8");
editor8.setFontSize(18);
editor8.renderer.setScrollMargin(10, 10, 10, 10);
editor8.setTheme("ace/theme/monokai");
editor8.session.setMode("ace/mode/php");
editor8.setAutoScrollEditorIntoView(true);
editor8.setOption("maxLines", 100);
editor8.setReadOnly(false);
value8 = editor8.getValue();
lang8 = "php";
</script>

<script class="script" id="script18">
var editor18 = ace.edit("code_insert18");
editor18.setFontSize(18);
editor18.renderer.setScrollMargin(10, 10, 10, 10);
editor18.setTheme("ace/theme/monokai");
editor18.session.setMode("ace/mode/php");
editor18.setAutoScrollEditorIntoView(true);
editor18.setOption("maxLines", 100);
editor18.setReadOnly(false);
value18 = editor18.getValue();
lang18 = "php";
</script>

<script class="script" id="script1">
var editor1 = ace.edit("code_insert1");
editor1.setFontSize(18);
editor1.renderer.setScrollMargin(10, 10, 10, 10);
editor1.setTheme("ace/theme/monokai");
editor1.session.setMode("ace/mode/php");
editor1.setAutoScrollEditorIntoView(true);
editor1.setOption("maxLines", 100);
editor1.setReadOnly(false);
value1 = editor1.getValue();
lang1 = "php";
</script>
</article>
<script  class="script"id="script8">
var editor8 = ace.edit("code_insert8");
editor8.setFontSize(18);
editor8.renderer.setScrollMargin(10, 10, 10, 10);
editor8.setTheme("ace/theme/monokai");
editor8.session.setMode("ace/mode/php");
editor8.setAutoScrollEditorIntoView(true);
editor8.setOption("maxLines", 100);
editor8.setReadOnly(false);
value8 = editor8.getValue();
lang8 = "php";
</script>

<script  class="script"id="script18">
var editor18 = ace.edit("code_insert18");
editor18.setFontSize(18);
editor18.renderer.setScrollMargin(10, 10, 10, 10);
editor18.setTheme("ace/theme/monokai");
editor18.session.setMode("ace/mode/php");
editor18.setAutoScrollEditorIntoView(true);
editor18.setOption("maxLines", 100);
editor18.setReadOnly(false);
value18 = editor18.getValue();
lang18 = "php";
</script>

<script  class="script"id="script1">
var editor1 = ace.edit("code_insert1");
editor1.setFontSize(18);
editor1.renderer.setScrollMargin(10, 10, 10, 10);
editor1.setTheme("ace/theme/monokai");
editor1.session.setMode("ace/mode/php");
editor1.setAutoScrollEditorIntoView(true);
editor1.setOption("maxLines", 100);
editor1.setReadOnly(false);
value1 = editor1.getValue();
lang1 = "php";
</script>
