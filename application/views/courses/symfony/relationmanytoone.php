<article>
العلاقة many to one أو n..1 هي العلاقة التي تجمع بين وحدة مع أكثر من وحدة أخرى  
<center><img src="<?= img_url('symfony/many-to-one.png')?>" height="292" width="294"></center>

<br>1-المقال يحتوي على تعليقات, والتعليق لاينتمي إلا لمقال واحد.

<br>هنا سنقوم بإنشاء entité سنسميها commentaire
<br>مع المتغيرات الكاتب auteur والنص contenu والتاريخ date.
<div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("commentaire_1.php");?>
</div>
<br>تعريف العلاقة في الوحدات les entités
<br>Annotation:
<br>نقوم بإضافة المتغير $article مع السطرين البرمجيين التاليين للتعريف بالعلاقة أن التعليق لديه مقال واحد فقط.
<br>
<div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("commentaire.php");?>
</div>

<br>أما الوحدة العكسية وهي المقال 
<br>لانحتاج إضافة تعليقات.
<div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("article.php");?>
</div>
<br>L’annotation التي استعملناها هي ManyToOne
<br>•	الملاحظة الأولى هي أن الوحدة المالكة في هذه العلاقة هي التعليق commentaire وليس المقال Article. 
<br>=> لأن في قاعدة البيانات وضعنا في جدول commentaire الخانة article_id
<br>=> Many لـ التعليقات و One للمقال.
<br>•	الملاحظة الثانية هي في 
<br>(ORM\JoinColumn(nullable=false@
<br>لعدم إنشاء تعليق من دون مقال
<br>لأن التعليق على أي من  المقالات ليس له معنى.
<br>لا تنس تحديث قاعدة البيانات بسطر CMD: <div dir="ltr" style="background-color:#000;color:#fff;">doctrine :schema :update</div>
<br>Getter و Setter
<br>نضيف الآن Setter و Getter  المناسبين للمتغير article$  في الوحدة المالكة التعليق
<br><div dir="ltr" style="background-color:#000;color:#fff;">php app/console doctrine :generate :entities SdzBlogBundle :Commentaire</div>
<div dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("commentaire_2.php");?>
</div>
<br>ملاحظة:
<br>نلاحظ في setArticle لا نقوم بـ $article = NULL بما أن العلاقة ضرورية بين التعليق والمقال.
<br>مثال نستعمل فيه العلاقة Many-To-One
<div  dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("test.php");?>
</div>
<br>
<br>سنغير الآن voirAction لإظهار المقال في الصفحة مع التعليقات:
<div  dir="ltr" class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("test2.php");?>
</div>
<br>هنا قمنا بإستخدام ()findAll لإستدعاء كل التعليقات الموجودة في جدول commentaire في قاعدة البيانات وليس حسب كل مقال.
<br>وهذا ما سنقوم به في القسم الثاني من هذه الدورة.

</article>