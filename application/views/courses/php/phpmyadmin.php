<article>
<p>إنشاء جدول في قاعدة البيانات:</p>
<center><img src="<?= img_url('php/9.png')?>" ></center>
<center>الصفحة الرئيسية لـ phpmyadmin</center>
<b>(1)	قائمة قواعد البيانات<b>
<p>
هي قائمة قواعد البيانات الموجودة في خادم MySQL .<br>
العدد الموجود بين قوسين هو عدد الجداول الموجودة في القاعدة.<br>
في الصورة لدينا إثنين من قواعد البيانات information_schema و mysql .<br>
لن نستعمل هاتين القاعدين لأنهما يعملان لفائدة النظام.<br>
</p>
<b>(2)	إنشاء قاعدة بيانات</b>
<p>
لإنشاء قاعدة بيانات جديدة , أدخل إسمها في الحقل الموجود على اليمين ثم إضغط على  Créer</p>
<center><img src="<?= img_url('php/10.png')?>" ></center>
<center>قمنا بإنشاء قاعدة البيانات test</center>
<p>
هذه الصفحة تعطي أنه لايوجد حتى الآن جداول في قاعدة البيانات test ولذلك سنقوم بإنشاء جدول.</p>
<p>في حقل Créer une nouvelle table dans la base test
أدخل إسم الجدول news وعدد الخانات 3.
</p>
<center><img src="<?= img_url('php/11.png')?>" ></center>
<p>إضغط على Exécuter</p>
<p>سنقوم بإنشاء ثلاثة أعمدة :<br>
Id: هذا العمود ضروري لترقيم البيانات.<br>
Title: هذا العمود يحتوي على عنوان الخبر.<br>
Contenu: هذا العمود يحتوي على محتوى الخبر.<br>
</p>
<center><img src="<?= img_url('php/12.png')?>" ></center>

</article> 