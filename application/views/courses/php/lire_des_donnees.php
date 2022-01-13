<article>
<br>Limit

<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_13.php");?>
</div>
<br>هذين العددين لهما معنى محدد
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_12.php");?>
</div>
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_14.php");?>
</div>
<br>يجب إدراج كلمات المفاتيح في الترتيب الصحيح
<br>WHERE ثم ORDER BY ثم LIMIT
<br>Les requetes التي رأيناها حتى الآن سهلة وتقوم بنفس المهام.
<br>المهم الآن هو les variables في les requetes
<br>
<br><b>إلصاق variable في requete</b>
<br><br>أنظر إلى هذه requete التي تظهر قائمة ألعاب Patrick
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_11.php");?>
</div>
<br>سنقوم الآن بـإظهار كل الألعاب التي تنتمي إلى مستعمل متغير لذلك سنقوم بإلصاق متغير في requete.
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_10.php");?>
</div>
<br>هذا الكود يعمل جيدا إلا أنه إذا قام الزائر بتغيير المتغير ['GET['possesseur_$ سيكون هناك ثغرة أمنية نسميها injections SQL
<br>يستطيع زائر من خلالها أن يقرأ بعض المعلومات من قاعدة البيانات مثل قائمة كلمات السر للمستخدمين من خلال كتابة requete أخرى عوضا عن التي كتبها المبرمج
<br>
<br> <b> requetes الجاهزة</b>
<br><br>نظام requetes الجاهزة لديه ميزة كونه صحيح ولكنه أيضا سريع مع قواعد البيانات خاصة إذا أستعملت requete أكثر من مرة.
<br>وهي ما أنصح  
 بإستعماله
فهي أفضل من requete  مع variables.
<br>مع نقاط الإستفهام:
<br>أولا نكتب la requete من غير الجزء المخصص للـ  variables. ونكتب عوضا عنه نقطة إستفهام.
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_9.php");?>
</div>
<br>
<br>نكتب الآن ()prepare عوضا عن ()query.
<br>الآن requete جاهزة من دون les variables.
<br>وسأقوم بإستدعاء الدالة execute ونعطيها les parametres:
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_8.php");?>
</div>
<br> 
إذا كان هناك أكثر من marqueur, يجب أن ندرج ذلك في الترتيب الصحيح.
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_7.php");?>
</div>
<br>
<br>نقطة الأستفهام الأولى ستعوض بـ ['GET['possesseur_$
<br>والثانية ستعوض بـ ['GET['prix_max_$
<br>محتوى هذين المتغيرين سيكونان محميان من تجاذبات SQL.
<br>الآن سنقوم بإنشاء صفحة لعرض قائمة الألعاب التي تنتمي إلى شخص حيث لا يتجاوز ثمنها مبلغا محددا.
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_6.php");?>
</div>
<br>

<br>لا بد من التأكد من ان ['GET['prix_max_$ يحتوي على عدد.
<br>سننادي هذه الصفحة وسنسميها selection_jeux.php وسنقوم بتغيير بعض قيم parametres 

<br>	Marqueurs nominatifs
<br>إذا requete تحتوي على variables كثيرة  يمكن أن نقوم بتسمية الملاحظ بدلا من إستعمال نقاط إستفهام.
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_5.php");?>
</div>
<br>

<br>نقاط الإستفهام تم تعويضها بالملاحظ الإسمي: :possesseur و :prixmax ويبدأ بـالنقطتين ":"
<br>هذه المرة الملاحظ سيتم تعويضه بجدول array مناسب.
<br>إذا كان يحتوي على parametres سيكون هذا أكثر وضوحا
<br>عكس نقاط الإستفهام لسنا بحاجة لإدراج variables في نفس الترتيب الموجود في requete.

<br>الأخطاء الناتجة عن requete
<br>عندما لاتعمل requete SQL , PHP يقول لك انه هناك خطأ في سطر fetch:
<br>Fatal error : Call to a member function fetch() on a non-object in C:\wamp\www\tests\index.php on line 13
<br>الخطأ هنا ليس محدد بما يكفي, ليس سطر fetch هو الذي يحتوي على الخطأ وإنما إنت من لم يكتب la requete بطريقة صحيحة .
<br>إذن في هذه الحالة لا بد من إضافة العبارة
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_4.php");?>
</div>
<br>
<br>في نفس سطر requete لإظهار تفاصيل الخطأ.

<br>حالة requete عادية
<br>في المثال الماضي سنضيف تجاوز الخطأ بالطريقة التالية:
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_1.php");?>
</div>
<br>
<br>السطر البرمجي الذي أضفناه لإظهار إذا كان هناك خطأ. ويظهر تفاصيل الخطأ SQL لفهم ما لا يعمل في requete.
<br>مثلا: نكتب إسم خاطئ مثل champinconnu
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_2.php");?>
</div>
<br>
<br>الخطأ سيظهر بهذه الشاكلة:
<br>Unknown column ‘champinconnu’ in field ‘field list’
<br>يعني انه لا يوجد حقل أسمه champinconnu  في قائمة الحقول.
<br>حالة requete جاهزة
<br>إذا كنت تستعمل les requetes preparées أضف السطرالبرمجي الذي يظهر الخطأ في نفس سطر ()execute وذلك بإستدعاء الدالة ()errorInfo للعضو req$ وليس bdd$.
<br><br><div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("codes/test_3.php");?>
</div>
<br>
<br>تلخيص:
<br>- للتعامل مع SQL بـ PHP نستعمل الخاصية PDO
<br>- قبل التعامل مع MySQL لابد من التواصل معه ولذلك نحتاج عنوان IP للجهاز الذي يحمل MySQL, إسم قاعدة البيانات, إسم المستخدم وكلمة العبور.
<br>- Requete SQL التي تبدأ بـ SELECT تسمح بقراءة المعلومات من قاعدة البيانات.
<br>- لابد من إنشاء boucle لمشاهدة البيانات الأتية من قاعدة البيانات سطرا سطرا.
<br>- لغة SQL تعطي الكثير من الأدوات لتحديد ماهية requetes مثل WHERE , ORDER BY وLIMIT  .
<br>- لإنشاء requete مع variables نستعمل نظام les requetes preparées الذي يسمح بتجاوز مشكلات injections SQL.


<article> 