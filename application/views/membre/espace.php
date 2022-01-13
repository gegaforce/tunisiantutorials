<h1>logo</h1>
<style>
.container{
	 direction:rtl;
}

.editeur{
	 width:300px ;
	 height:300px;
	 border: solid 1px;
}

</style>
<div class="container">
	<br>
	choisir type de cours
	<br>
	<input type="radio" id="" name="type_de_cours"/><label>درس بصفحة واحدة</label>
	<input type="radio" id="" name="type_de_cours"/><label>درس باكثر من صفحة</label>
	<br>
	أضف عنوان الدرس
	<br>
	<input type="text" id="titre_de_cours" name="titre_de_cours"/>
	<br>
	أضف وصف بسيط
	<br>
	<textarea name="description"></textarea>
	<br>
	l'editeur de texte
	<br>
	<div contentEditable class="editeur"></div>
	<br>
	<button>حفظ</button>
	<br>
	ecrire le content
</div>

