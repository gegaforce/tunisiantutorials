

<article><p>
إستعمال حقل التاريخ  Dateفي SQL:<br>
<div class="code" id="code_form" onClick="selectText('code_form')">SELECT pseudo, message, date FROM minichat WHERE date = ‘2017-05-07’<br>
</div>

سيظهر لك قائمة الرسائل المودعة بتاريخ 2017/05/07<br>
إذا كان الحقل من نوع DATETIME يجب إدراج الساعات, الدقائق والثواني كما يلي:<br>
		<div class="code" id="code_form" onClick="selectText('code_form')">SELECT pseudo, message, date FROM minichat WHERE date = ‘2017-05-07 15 :28 :22’<br>
</div>

وسيظهر لك قائمة الرسائل المودعة بتاريخ 2017/05/07 الساعة 15 و 28 دقيقة و22 ثانية.<br>
يمكن أيضا إدراج الرسائل المودعة بعد التاريخ<br>
		<div class="code" id="code_form" onClick="selectText('code_form')">SELECT pseudo, message, date FROM minichat WHERE date >= ‘2017-05-07 15 :28 :22’<br>
</div>

والرسائل المودعة بين تاريخين:<br>
		<div class="code" id="code_form" onClick="selectText('code_form')">SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00'<br>
</div>

وظائف التصرف في التاريخ Les fonctions de gestion des dates:<br>
الحصول على التوقيت والتاريخ الحاليNOW()<br>
		<div class="code" id="code_form" onClick="selectText('code_form')">INSERT INTO minichat(pseudo, message, date) VALUES (‘Stephane’, ‘Message!’, NOW())<br>
</div>

</p>
</article>