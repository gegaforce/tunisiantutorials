<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">

<style type="text/css">
body {
    font-family: 'Noto Naskh Arabic', tahoma, sans-serif;
    color: #212121;
	direction:rtl;
}
p { 
  font-family: 'Droid Arabic Naskh', serif;
  word-wrap: break-word;
  font-style: normal;
  font-size: 18px;
  font-weight: 400;
  text-align:right;
  direction:rtl;
}
.code {
	font-family: "Courier New", Courier, monospace;
	font-style: normal;
	font-weight: 400;
	text-align:left;
	background-color: #FFFF;
    color: #000000;
    margin-left: 2em;
    margin-right: 2em;
    margin-top: 1em;
    margin-bottom: 0px;
    border-style: solid;
    border-color: #003366;
    border-width: 1px 1px 1px 1px;
    padding: .5em;
	border-radius: 5px;
	direction:ltr;
}
article{
	display: inline-block;
    color: #000000;
    margin-right: 20px;
    margin-left: 18px;
    margin-top: 1em;
    margin-bottom: 0px;
    padding: .5em;
	background-color: #fafafa;
	border-radius: 5px;
	width:700px;
}
.tableOfContent
{
	display: inline-block;
	width: 364px;
	height:617p;
	border-radius:5px;
	margin-top:18px;
	vertical-align:top;
	background-color: #fafafa;
	direction:ltr;
}

ul{
	padding-left:6px;
}
</style>
<?php include('header.html');?>
<p dir="RTL">حيث لا مكان للإختباء &ndash; تلخيص بتصرّف من الكتاب The Agile Samurai</p>
<p dir="RTL">لننسى أنك مطور ( لدقائق معدودة ) وتخيل أنك صاحب مشروع كبير ولديك المال المناسب لهذا المشروع, السؤال المهم الأن : ماهو الشيء الذي يجعلك تثق في ان الفريق يعمل ويسير في الإتجاه الصحيح ؟</p>
<p dir="RTL">مجموعة من الملفات الورقية والتقارير ؟</p>
<p dir="RTL">أم عرض Power Point به صور متحركة (هذا يحدث للأسف, هناك مبرمج بعد ثلاثة أشهر من العمل جاء بعرض Power Point) أم الأفضل ان تشاهد نسخة مصغرة من البرنامج تعمل امامك وخلال كل اسبوع او إثنان ترى Feature جديدة في البرنامج؟</p>
<p dir="RTL">لننسى التخيل ولنعد للواقع, وشاهد كيف اتضح لك ان الشيء الملموس ولو كان مصغرا أفضل كثيرا من التقارير والأوراق والوعود الزائفة, بهذا المنظور سوف تعمل جيدا والأشياء الجيدة سوف تحدث.</p>
<p dir="RTL">كيف تقوم بذلك, وذلك باتباع طريقة تطوير تسمى Agile, الـ Agile هي ممارسات معنة في تطوير البرمجيات تكون غالبا بشكل متكرر وعلى وتيرة واحدة الى حين تطوير المشروع بالكامل Iterative Development , وكما هي طبيعة البرمجيات فلا توجد اي منهجية او وسيلة تضمن نجاح المشروع هكذا بدون أي عوامل أخرى, وحنى استخدمت الـ Agile فقد تفشل في مشروعك لو قمت به بشكل خاطئ, لكن باتباع الـ Agile بالشكل الصحيح فسوف تزيد نسبة النجاح بشكل أعلى من غيرها لأن الأمور سوف تتضح جدا منذ بدايات المشروع.</p>
<p dir="RTL">قد تكون صادفت هذه الكلمة كثيرا في مسيرتك البرمجية, وسنتعرف في هذه السلسلة من الدروس عن طريقة التطوير هذه وكيف يمكن ان تطور مشروعك بها, وحينها قد تستطيع تسليم المشروع في الوقت والميزانية المطروحة بسهولة on time, on budget .</p>
<p dir="RTL">وبشكل عام ستغطي اهم ثلاثة مراحل في التطوير والتي عادة ما تكون فشل المشروع هو القيام بهذه المراحل بشكل خاطئ:</p>
<p dir="RTL">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; كيف تبدا مشروعك الجديد Kick Start سواء كان مشروك تقوم به لوحدك او تعمل ضمن فريق كامل, نقطة البداية مهمة جدا حيث قد يبدا المشروع وكل شخص قد يكون لديه تخيل عن شكل المشروع مختلف عن الأخر, وفي الأخير بعدما ينتهي الوقت سوف تصل لمرحلة لا تحمد عقباها ( مثلا ان يعتقد مدير المشروع بأن المشروع سوف يتجه بهذا الإتجاه, ويعتقد مدير الفريق بان المشروع سوف يكون بهذا الشكل, والمبرمج له رايه أيضا), لذلك نقطة البداية مهمة لإزالة كل التشويش والصور غير المكتملة لجميع أفراد الفريق ( من المطورين والمختبرين والعميل والمحللين ومدير المشروع والى المصممين) ,, حتى اذا كنت تطور بمفردك فتحديد طريقة البداية بالطريقة الصحيحة سوف يفيدك في هذا المشروع , اضافة لتحضيرك لكي تعمل على إحدى فرق الـ Agile ولن تجد متاعب حينها.</p>
<p dir="RTL">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; كيف تجمع المتطلبات Requirements وتقوم بحساب الوقت المناسب لها Estimation وتقوم بوضع الخطة plan التي ستعتمد عليها في التطوير, هذه المرحلة من اهم المراحل فكل المشاريع تحتاج خطة واضحة المعالم, بالإضافة الى أن كثير من المبرمجين يواجهوا صعوبات في تقدير الوقت المطلوب في انجاز العمل, في هذه المرحلة سيتم توضيح كيف يمكن التقدير بصورة صحيحة وأعداد الخطة الصادقة والواضحة الأهداف والمعالم.</p>
<p dir="RTL">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; كيف تبدأ مرحلة التنفيذ Execution , وهنا كيف ستقوم بتحويل الخطة الى منتج حقيقي ذو جودة في الكود Quality Code, وهنا ستمر على كافة مراحل التطوير (التحليل, التصميم, البرمجة, الاختبار) ولكن لن تكون بشكل تقليدي لأن تطبيقها سوف يكون على حساب خطتك بالإضافة الى الإعتماد على الأساليب الصحيحة في بناء البرمجيات (مثلا القيام بعمليات تحسين الكود بشكل متكرر Refactoring , استخدام الأدوات الصحيحة Unit Testing والخ).</p>
<p dir="RTL">قبل أن نبدا بالخوض في غمار الـAgile فهناك بعض قواعد لهذه المنهجية يجب ان يدركها أي شخص يعمل ضمنها, سوف نذكرها بشكل موجز حتى تستعدّ للرحلة القادمة, لا تقلق إذا كان هناك غموض فهذا طبيعي مع أول درس في أي مجال, فقط استمر بمتابعة البقية وستجد الأمر سهل الإدراك:</p>
<p dir="RTL">0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التسليم المتكرر كل فترة Deliver Something of value every week, لا يوجد أفضل من تسليم ميزة Feature تعمل جيّدا من التطبيق كل فترة (اسبوع او اثنان), هكذا يطمئن العميل ان مشروعه يسير في المسار الصحيح وان ماله لن يذهب سدى, لذلك تعتبر هذه من القواعد الـ Agile المهمة.</p>
<p dir="RTL">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; تقسيم المشكلة الكبيرة الى أجزاء صغيرة: كل أسبوع لن تستطيع تسليم شيء ضخم لأنه أسبوع واحد فقط, لذلك عليك بتقسيم المهام الى أبسط أشكال ممكنة حتى تستطيع العمل على كل يكفي خلال اسبوع, مثلا لو أردت بناء موقع للعميل, فسوف تقوم بتقسيم العمل على أجزاء صغيرة (الصفحة الرئيسية, الصفحات الأخرى, لوحة التحكم, ارسال البريد, الخ)</p>
<p dir="RTL">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; فقط اهتم بالأشياء المهمة وانسى البقية: فالـ Customer أو المدير لن يهتم بالتوثيقات Documentation والأوراق اذا لم يكن هناك شيئا يعمل, فالأوراق والخطط والتوثيقات هي لدعم البرنامج (أقصد الذي يعمل Working Software) هي مهمة ولكن إذا لم يكن هناك برنامج يعمل فما فائدتها ؟. عندما تركز على هذه النقطة (ميزة Feature تعمل كل أسبوع) سوف تكون أفضل في أداء هذه الميزة Feature حيث التركيز لها وتنسى البقية الأن, تبني بالتدريج.</p>
<p dir="RTL">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الإختبار ثم الإختبار الدائم: بما أنك تطوّر بالتدريج ميزة تلو الأخرى فالإختبار سوف يكون تدريجي أيضا منذ أول أسبوع, مثله مثل التطوير.</p>
<p dir="RTL">4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; استمع جيدا وخذ الأراء Feedback: كل اسبوع أو إثنان عليك بمعرفة الأراء من العميل, هكذا تعلم أنك في المسار الصحيح, وتتحرك بقلب مطمئن الى الأمام (من مشاكل الطرق التقليدية في التطوير بالأخص Waterfall هي أنك بعد عناء التطوير والمدة الكبيرة مثلا 8 أشهر ومن ثم تأتي لمرحلة التسليم وتبدأ عملية مرحلة التذمر من العميل وأنه لا يريد هذا ولا يريد هذا وأن هذا يريده بشكل أخر, الـ Agile سوف يقلّص هذا لأقل درجة ممكنة حيث العميل الذي يريد البرنامج يعرف شكل البرنامج ويعرف الخصائص حيث كان يشاهده طيلة فترة التطوير وكل التغييرات سوف تحدث أثناء التطوير).</p>
<p dir="RTL">5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; لذلك اقبل التغيير متى ما كان: المتطلبات تتغير دائما ( هذه أحدى القواعد في تطوير البرمجيات, يجب عليك ان تدركها جيّدا), وأيضا طبيعة العمل تتغير فقد يغادر ذو الخبرة من الفريق Senior Programmer أو ان يذهب في إجازة والخ, إذا كنت تتبع الخطط بشكل أعمى فسوف تصل في النهاية المشروع الى شيء لا يريده أحد (ولن تستطيع تحمل الركلات واللكمات), فعندما يتعارض الواقع مع الخطة, فغيّر الخطة وليس الواقع When reality misses with your plan, you change your plan not reality.</p>
<p dir="RTL">6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; كن مسؤولاbecome accountable : التسليم الأسبوعي يعطيك الإحساس بالمسؤولية أكثر فانت ترى العميل كل أسبوع وتريه التقدم وفي أين دفعت النقود, لذلك هناك من يرفض طريقة العمل هذه, ربما لأنها تتسم بالوضوح ومشاهدة العمل الحقيقي فلا مكان للإختباء أو الهرب فكل شيء مكشوف أخر الأسبوع ( هل أنت عملت أم لم تعمل) .. لكن في الحقيقة إذا كنت شخص متحمس وتحب العمل فـ Agile توفر لك بيئة ممتعة حقّا.</p>
<p dir="RTL">ولا تنزعج من فكرة كل أسبوع تسليم, فهذا يختلف من فريق لأخر, هناك من يسلم كل أسبوعين وهناك من يسلم كل ثلاثة أسابيع, الفكرة هنا أن تتعود على تسليم شيء يعمل كل فترة لأخذ الأرا والملاحظات وأن تكون مستعدّ للتغيرات إذا حدثت. (من حسب تجربتي في الـ Agile فهي تجدي نفعا مع المشاريع الموجّهة للعميل أو يمكن أن نقول entreprise Application أو Web Application حيث لاوجود للبحث العلمي في التطوير, لكن بالنسبة للعمل البحثي الذي يتطلب الأبحاث والتجارب فبعض ممارسات الـ Agile سوف يجدي ولكن البعض الأخر لن يفيد كثيرا).</p>
<p dir="RTL">7)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; من اعلى اولويات الـ Agile هو إرضاء العميل من خلال التسليم المبكر والمستمر early and continuous delivery لأشياء تعمل في النظام, لذلك إذا كنت تستطيع اطلاق الصفحة الرئيسية من الموقع بعد أسبوع فافعل ذلك وأرى العميل أنك تعمل وهذه النتيجة.</p>
<p dir="RTL">8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; طريقة التطوير الـ Agile ليست عشوائية بل هناك مرحلة تخطيط لأي مرحلة Plan, والتخطيط في مشروع Agile لا يختلف عن التخطيط لرحلة طويلة, وبدلا من إستخدام لفظ قائمة المهام to Do List هنا يستخدموا لفظ User Stories و Master Story (عذرا لن نترجم المصطلحات ولكن سنشرحهم جيدا فيما بعد). في الـ Agile &nbsp;يمكن ان نشبه الـ Master story list بالـ to-do list &nbsp;كما ذكرنا, حيث هي تحتوي على كل الـ Features بشكل مبسط جدا &nbsp;High Level (يطلق على كل أي Feature بالـ user story) والتي طلبها العميل في المشروع, ويقوم العميل بترتيبها حسب الأهمية التي يراها Prioritized, وتقوم انت المبرمج وفريقك بتخميين Estimate الوقت المناسب لهذه الـ user stories وهكذا تعتبر هذه أول نواة للخطة Plan في مشروعك. لو لاحظت في الصورة السابقة ان هناك مراحل تسمى Iterations وهي الفترة الزمنية ( أسبوع أو إثنين) والتي تقوم فيها بتطوير أي من الـ user story التي يريدها العميل ( سوف تأخذ الأكثر اهمية بناء على التقييم العميل) وتقوم بتحويل هذا الطلب الى شيء يعمل في المشروع.</p>
<p dir="RTL">اثناء بدء المشروع سوف تعلم وفريقك سرعتكم في التطوير (تسمى Team Vectory بمعنى العمل الي أنجز خلال الـ Iteration الواحد), وهكذا يتبع الـ Velocity واستخدامه كمؤشر يمكنك ان تتوقع كم ستنجز في الفترة المقبلة وبالتالي تستطيع أن تعطي العميل أكثر خطة واقعية وصادقة honest plan وهكذا تبتعد عن مشاكل القول بلا فعل over-committing. أحيانا قد يطلب منك عمل اكثر من ما تستطيع, وفي هذه عليك بفعل ما تستطيع وهو فعل الأقل, وكلما كنت مرنا في مزايا المشروع Fleible on Scope كلما تكون مماشيا مع الخطة ومع الوعيد التي اعطيتها Commitments.</p>
<p dir="RTL">وكما ذكرنا عندما يختلف الواقع Reality مع الخطة Plan, فقط عليك بتغيير الخطة (وهذه من اهم ما يميّز الـ Agile وهو الخطط المتغيرة Adaptive Plannig). فأنت تعمل مع العميل منذ أول يوم وهو يعرف كل خطوة تقوم بها والمشاكل الحالية وسوف يقوم بأخذ القرارات المتعلقة بسير المشروع, والتواريخ والميزات الموجودة فيه. هكذا في الـ Agile لا يوجد شيء يسمى العمل على خطة مهما كان سواء كانت مناسبة أم غير مناسبة ومن ثم إنتظار المعجزة كي تحدث ويخرج المشروع,,</p>
<p dir="RTL">9)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الصدق في الحديث وان الميزة عندما تنتهي يعني أنها إنتهت من كل شيء Done means Done, فأكثر ما يزعج العميل أو المدير أن تقول له انتهيت ثم تأتي بعد فترة وتقول هناك شيء لم ينتهي بعد ( لا نريد أي مفاجئات خصوصا في الوقت الأخير), لذلك هذه القاعدة من أساسيات الـ Agile فعندما يقال ان الميزة انتهت فهذا يعني أنها انتهت فعليا ( التحليل, التصميم, البرمجة, الإختبار, اي اختبارات اخرى),</p>
<p dir="RTL">10)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;لاتنسى القواعد البرمجية الثلاثة في تطوير البرمجيات three Simple Truths (لا يمكنك كامل جمع المتطلبات منذ البدء, المتطلبات سوف تتغير دائما, الوقت دائما ضيق مقارنة بالمطلبات الأساسية والموارد أيضا قليلة)</p>
<p dir="RTL">النظرة الأولى (لا يمكنك جمع كامل المتطلبات منذ البدء) تعني أمك لن تخف في البدء في المشروع بدون معرفة تفاصيل كل شيء بشكل دقيق, فقط سوف المتطلبات الأساسية والبقية سوف يتم اكتشافها وقت التطوير,,</p>
<p dir="RTL">النظرية الثانية (المتطلبات تتغير دائما) فهذا يعني أيضا أنك تعي أن التغيير قادم لا محالة, وان كودك يجب أن يكون مهيأ لذلك, وأيضا الخطة المطروحة سوف تتغير مع الوقت وتتماشى مع هذه الإضافات أو التغييرات.</p>
<p dir="RTL">النظرية الثالثة (الوقت والمبلغ لا يكفيان لكل العمل) فهذا يعني أنك لن تتوقف من العمل بمجرّد أن قائمة المهام كثيرة اكثر من الوقت والمبلغ المدفوع, هذا الأمر يحصل دائما وفي كل المشاريع وحينها عليك بترتيب المهام بحسب الأعلى أهمية ومن ثم تقوم بالعمل عليها واترك البقية بعدما تنهي المهم.</p>
<p dir="RTL">بمجرد قبولك لهذه القواعد فان كثيرا من الضغوط والقلق سوف تزال اثناء العمل على المشروع, وسوف يكون تركيزك أكثر على العمل وليس على لماذا هذا التغيير ولا يمكن ذلك والخ.</p>
<p dir="RTL">11)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;أخيرا الـ Agile هي ممارسات عامة في التطوير there is no one ultimate flavor of agile وهناك الكثير من المنهجيات تندرج تحتها مثلا Scrum أو XP.</p>
<p dir="RTL">فمثلا هناك الـ Scrum والتي تستخدم في إدارة مشاريع الـ Agile (يمكن القول بانها قواعد معينة في سير مشروع الـ Agile), وهناك الـ XP والتي هي أيضا ممارسات معينة تطبق على مشروع الـ Agile وغيرها من المنهجيات التي جميعها تطبق تحت مفهوم الـ Agile, كل هذه المنهجيات تأتي ضمن فكرة الـ Agile وتطبيقها إيجاد منهجيتك الخاصة في التطوير فلا يوجد مانع لذلك</p>
<p dir="RTL">المقالة القادمة ان شاء الله سوف تتحدث عن الفريق Agile Team وكيف يكون هذا الفريق وأدوارهم وبعض الأمور التي يجب ان يعلمها كل أفراد الفريق قبل البدء في المشروع, الى اللقاء القريب.</p>