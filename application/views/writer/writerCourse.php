<!DOCTYPE html>
<html>

	<head>
		<META HTTP-EQUIV="Content-Type"  CONTENT="text/html; CHARSET=iso-8859-6">
		<title>Mon éditeur WYSIWYG</title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('time_line'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('feuille'); ?>">
		<script type="text/javascript" src="<?php echo js_url('jquery-3.2.0.min')?>"></script>
		<script type="text/javascript" src="<?php echo js_url('bootstrap.min')?>"></script>
		<script src="<?php echo js_url('ace-builds-master/src-noconflict/ace');?>" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
	<style>

		.hidden{
			visibility:hidden;
		}
		.title{
			color:blue;
		}
		.attribute{
			color: red;
		}
		.value{
			color: #333;
		}
		#select_image{
			
		}
		#tableau_bord{
			z-index:1;
			background-color:rgba(0,0,0,.04);
			padding:1px 5px;
			top:0px;
			display:block;
			position:static;
			
		}
		.big_tableau_bord{
			position:fixed;
			z-index:99;
		}
		#editeur{
			margin-top: 150px;
			height: auto;
		}
		.row{
			direction:rtl;
			position:relative;
		}


	</style>
</div>
<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="afficheImage" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
			<div id ="content-image"></div>
      </div>
      
    </div>
  </div>
  
</div>



		<div class="row">
			<div class="big_tableau_bord">
				<div id='tableau_bord'>

					<input type="button" value="Gras" class=""  data-toggle="tooltip" title="bold" data-placement="bottom" style="font-weight:bold;" onclick="commande('bold');" >
					<input type="button" value="Italic" class=""  data-toggle="tooltip" title="italic" data-placement="bottom"  style="font-style:italic;" onclick="commande('italic');"/> 
					<input type="button" value="Souligné" class=""  data-toggle="tooltip" title="souligné" data-placement="bottom"  style="text-decoration:underline;" onclick="commande('underline');"/> 
					<input type="button" value="Corruption" class=""  data-toggle="tooltip" title="code" data-placement="bottom"  alt = "affiche code" id="affiche_code"/> 
					
					<button   class=" " title="remarque"    data-tooltip="tooltip"  data-placement="bottom"  data-toggle="modal" id="select_remarque" data-target="#ModalRemarque"><img src="<?= img_url('logos/13-512.png')?>" id="img_preload" width="11" height="11"/></button>
					<button type="button" class="" title="question"    data-tooltip="tooltip"  data-placement="bottom"  data-toggle="modal" id="select_question" data-target="#ModalQuestion">أضف سؤال</button>
					<button type="button" class="" title="erreur"      data-tooltip="tooltip"  data-placement="bottom"  data-toggle="modal" id="select_erreur" data-target="#ModalErreur">أضف خطأ</button>
					<button type="button" class="" title="information" data-tooltip="tooltip"  data-placement="bottom"  data-toggle="modal" id="select_information" data-target="#ModalInformation">أضف معلومة</button>

					<button type="button" class="" title="code"   data-tooltip="tooltip"  data-placement="bottom"  data-toggle="modal" id= "select_code"    data-target="#myModal">أكتب كود</button>
					<button type="button" class="" title="image"  data-tooltip="tooltip"  data-placement="bottom"  data-toggle="modal" id="select_image"    data-target="#ModalImage">أضف صورة</button>
					<button type="button" class="" title="link"  data-tooltip="tooltip"  data-placement="bottom"  data-toggle="modal" id="select_link"    data-target="#ModalLink">أضف رابط</button>
					<br>
					<span>حجم الخط</span>
					<select onclick="commande('fontSize',this.selectedIndex);" title="taille d'ecriture" data-tooltip="tooltip"  data-placement="bottom" >
						<option>20</option> 
						<option>24</option> 
						<option>28</option> 
						<option>32</option> 
					</select>
					
					<input type="button" title="save" data-tooltip="tooltip"  data-placement="bottom"  id="create_file" value="حفظ الصفحة" class="btn btn-success"/>	
				</div>
			</div>
			<div id="editeur" dir="rtl" contentEditable>
				<?php 
				if(isset($content)){
					if (strpos($content, '<article>') !== false && strpos($content, '</article>') !== false) {
						 $content = str_replace('<article>', ' ', $content) ;
						 $content = str_replace('</article>', ' ', $content) ;
						 //echo '<textarea dir ="ltr">';
						echo $content;
						//echo '</textarea>';
					}
				}
					
				?>
			</div>			
		</div>

			

  <!-- Trigger the modal with a button -->
		
  <!--
  
  ###############################          CODE            #######################################
  
  -->			
			
			
<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<select id="aioConceptName">
						<option selected></option>
						<option value ="java">java</option>
						<option value ="php">php</option>
						<option value ="html">html</option>
						<option value ="javascript">javascript</option>
					</select>
					<div id="codeeditor"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" id="codeButton" data-dismiss="modal">ajouter code</button>
				</div>
			</div>
		</div>
	</div>
  
</div>
  <!--
  
  ###############################          ADD LINK            #######################################
  
  -->

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="ModalLink" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
		<form  action="" method="post">
			<div class="modal-body">
			  <div id="link_div">			
					lien:<input type="text" name = "link" id="link"/>
					text affiche<input type="text" name = "txt_affiche" id="txt_affiche"/>
			  </div>
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-default" id="linkButton" data-dismiss="modal">موافق</button>
			</div>
		</form>
      </div>
      
    </div>
  </div>  
  <!--
  
  ###############################          UPLOAD IMAGE            #######################################
  
  -->

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="ModalImage" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
		<div id="editeur_info_w_h">عرض محرر النص : 800px</div>
		<img src="<?= img_url('logos/13-512.png')?>" id="img_preload" width="87" height="120"/>
			width:<input type="text" id = "w"/>
			height<input type="text" id= "h"/>
			<input type ="button" id="get_w_h" value ="ضع الطول و العرض"/>
		
		<form id="form_image" action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div id="text">			
				<input type="file" name="file_img" onchange="showPreview(this);"/>
		  </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="uploadButton" data-dismiss="modal">uploadImage</button>
        </div>
		</form>
      </div>
      
    </div>
  </div>
  <script>
  var height=0;
  var width=0;
  function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
		var h=0;
		var w=0;
        fileReader.onload = function (e) {
           // $('#blah').attr('src', e.target.result);
			$("#img_preload").attr('src',e.target.result);//('<img src="'+e.target.result+'" id="img_preload" />');
			//$("#targetLayer").css('opacity','0.7');
			//$(".icon-choose-image").css('opacity','0.3');

			 // w = $("#img_preload").width();
			 // console.log(w);
			 // h = $("#img_preload").height();
			 // console.log(w);
			// $('#h').val(h);
			// $('#w').val(w);
        }
		fileReader.readAsDataURL(objFileInput.files[0]);
		$("#img_preload").on('load',function(){
				var h=this.height,w=this.width;
				$(this).removeAttr('width').removeAttr('height');
				var actualHeight =this.height,actualWidth=this.width;
				$(this).attr({height:h,width:w}).data({height: actualHeight, width: actualWidth});
				console.log(actualHeight);console.log(actualWidth);
				$('#h').val(actualHeight);
			    $('#w').val(actualWidth);
			});
    }
}
	$("#get_w_h").click(function(){
		//var src = "";
		
		$("#img_preload").attr('height',$('#h').val());
		$("#img_preload").attr('width',$('#w').val());
		height=$('#h').val();
		width=$('#w').val();
	});
  </script>
	<!--###############################          REMARQUE            #######################################-->
	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="ModalRemarque" role="dialog">
			<div class="modal-dialog">
			
				<!-- Modal content-->
				<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Modal Header</h4>
						</div>
						<form  action="" method="post" enctype="multipart/form-data">
						<div class="modal-body">	
								<div id="remarque_editor"  dir="rtl" contentEditable class="remarque_editor"><p>ماهي الملاحظة...</p></div>
						</div>
						<div class="modal-footer">
						  <button type="submit" class="btn btn-default" id="remarqueButton" data-dismiss="modal">ajouter remarque</button>
						</div>
						</form>
				</div>
			  
			</div>
		</div>
	</div>
	<!--###############################          QUESTION            #######################################-->
	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="ModalQuestion" role="dialog">
			<div class="modal-dialog">
			
				<!-- Modal content-->
				<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Modal Header</h4>
						</div>
						<form  action="" method="post" enctype="multipart/form-data">
						<div class="modal-body">	
								<div id="question_editor"  dir="rtl" contentEditable class="question_editor"><p>ماهو السؤال...</p></div>
						</div>
						<div class="modal-footer">
						  <button type="submit" class="btn btn-default" id="questionButton" data-dismiss="modal">ajouter question</button>
						</div>
						</form>
				</div>
			  
			</div>
		</div>
	</div>
	<!--###############################          ERREUR            #######################################-->
	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="ModalErreur" role="dialog">
			<div class="modal-dialog">
			
				<!-- Modal content-->
				<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Modal Header</h4>
						</div>
						<form  action="" method="post" enctype="multipart/form-data">
						<div class="modal-body">	
								<div id="erreur_editor"  dir="rtl" contentEditable class="erreur_editor" ><p>ماهو الخطأ...</p></div>
						</div>
						<div class="modal-footer">
						  <button type="submit" class="btn btn-default" id="erreurButton" data-dismiss="modal">ajouter erreur</button>
						</div>
						</form>
				</div>
			  
			</div>
		</div>
	</div>
	<!--###############################          INFORMATION            #######################################-->
	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="ModalInformation" role="dialog">
			<div class="modal-dialog">
			
				<!-- Modal content-->
				<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Modal Header</h4>
						</div>
						<form  action="" method="post" enctype="multipart/form-data">
						<div class="modal-body">	
								<div id="information_editor"  dir="rtl" contentEditable class="information_editor"><p>ماهي المعلومة...</p></div>
						</div>
						<div class="modal-footer">
						  <button type="submit" class="btn btn-default" id="informationButton" data-dismiss="modal">ajouter information</button>
						</div>
						</form>
				</div>
			  
			</div>
		</div>
	</div>
	<script>
		var code ="";
		var editor2="";
		var myObj, i, j, x = "";
		myObj = [];		
		//addNewElement(myObj,codeid,code,lang,script,button,affiche);
	
		//console.log($('#editeur').html());
		$("div[id^='code_insert']").each(function (i, el) {
			//$("div[id^='code_insert']").html(value)
			//$( this ).removeClass( " ace_editor ace-monokai ace_dark" )
			var text = this.id;
			var value = text.replace("code_insert", "value");
			var scriptid = text.replace("code_insert", "script");
			var langid = text.replace("code_insert", "lang");
			var button = text.replace("code_insert", "button");
			var codeid = this.id;
			var script = '<script class="script" id="'+scriptid+'">'+$("#"+scriptid).html()+'<\/script>';
			var code = eval(value);
			var lang = eval(langid);
			var affiche = "affiche";
			console.log(el);
			addNewElement(myObj,codeid,code,lang,script,button,affiche);
		});
		//console.log(value17);
		$('[data-toggle="tooltip"]').tooltip(); 
		$('[data-tooltip="tooltip"]').tooltip();
		var id ='';
		$('#select_code').click(function(){
			document.getElementById('editeur').focus();
			id = Math.floor((Math.random() * 20) + 1);
				pasteHtmlAtCaret("<br><div dir='ltr' id='code_insert"+id+"'>@code</div><br>");
			console.log("code id "+id);
		});
		$('#select_image').click(function(){
			document.getElementById('editeur').focus();
				pasteHtmlAtCaret("<div id='image_insert'>@image</div>");			
		});
		$('#select_link').click(function(){
			document.getElementById('editeur').focus();
				pasteHtmlAtCaret("<a href='#' id='link_insert'>@link</a>");			
		});
		$('#select_remarque').click(function(){
			document.getElementById('editeur').focus();
				pasteHtmlAtCaret("<div id='remarque_insert'>@remarque</div>");			
		});
		$('#select_question').click(function(){
			document.getElementById('editeur').focus();
				pasteHtmlAtCaret("<div id='question_insert'>@question</div>");			
		});
		$('#select_erreur').click(function(){
			document.getElementById('editeur').focus();
				pasteHtmlAtCaret("<div id='erreur_insert'>@erreur</div>");			
		});
		$('#select_information').click(function(){
			document.getElementById('editeur').focus();
				pasteHtmlAtCaret("<div id='information_insert'>@information</div>");			
		});
		
		$('#affiche_code').click(function(){
			document.getElementById('editeur').focus();
				pasteHtmlAtCaret("<div class='affiche_code'>affiche_code</div>");			
		});
		$(document).ready(function()
		{
			$(window).bind("beforeunload", function() { 
				return "Do you really want to close?"; 
			});
		});	
		function commande(nom, argument){
			if (typeof argument === 'undefined') {
				argument = '';
			}
			
			document.execCommand(nom, false, argument);
		}	
		var lang="";
		var editor = ace.edit("codeeditor");
		editor.setTheme("ace/theme/monokai");
		editor.session.setMode("ace/mode/java");	
		editor.setAutoScrollEditorIntoView(true);
		editor.renderer.setScrollMargin(10, 10, 10, 10);
		editor.setOption("maxLines", 100);
		document.getElementById('codeeditor').style.fontSize='18px';
		$('#aioConceptName').change(function() {
			lang = $("#aioConceptName :selected").attr('value');
			editor.session.setMode("ace/mode/"+lang);
		});

		$('#codeButton').click(function(){
			codeid = 'code_insert'+id;
			button = 'button'+id;
			editor2 = ace.edit(codeid);
			editor2.setFontSize(18);
			editor2.renderer.setScrollMargin(10, 10, 10, 10);
			editor2.setTheme("ace/theme/monokai");
			editor2.session.setMode("ace/mode/"+lang);
			editor2.setAutoScrollEditorIntoView(true);
			editor2.setOption("maxLines", 100);
			editor2.setReadOnly(true);
			code = editor.getValue();
			editor2.setValue(code);
			
			var script='\n<script  class="script"id="script'+id+'">\n'
				+'var editor'+id+' = ace.edit("'+codeid+'");\n'
				+'editor'+id+'.setFontSize(18);\n'
				+'editor'+id+'.renderer.setScrollMargin(10, 10, 10, 10);\n'
				+'editor'+id+'.setTheme("ace/theme/monokai");\n'
				+'editor'+id+'.session.setMode("ace/mode/'+lang+'");\n'
				+'editor'+id+'.setAutoScrollEditorIntoView(true);\n'
				+'editor'+id+'.setOption("maxLines", 100);\n'
				+'editor'+id+'.setReadOnly(false);\n'
				+'value'+id+' = editor'+id+'.getValue();\n'
				+'lang'+id+' = "'+lang+'";\n'
				+'<\/script>\n';
			var affiche = "affiche";
			addNewElement(myObj,codeid,code,lang,script,button,affiche);
			//var show = false;
			$("<button class='button' value='"+codeid+"' id='button"+id+"'>supprimer</button>").insertAfter("#"+codeid);	
			$('#button'+id).hide();
			
			show_button_supprime();
		});
		function show_button_supprime(){
			
			var mouse_is_inside  = false;
			
			$.each(myObj, function(i, obj){
				$("#"+obj.id).hover(function() {
					$('#'+obj.button).show();
					$( "#"+obj.button ).click(function(){
						mouse_is_inside=true; 
						console.log("#"+this.value);
						affiche = "supprime";
						removeElement(myObj,obj.id,obj.code,obj.lang,obj.script,obj.button,affiche);
						console.log(myObj);
						$("#"+this.value).remove();
						$("#"+this.id).remove();
					});
				}, function(){ 
						mouse_is_inside=false; 
				});
				$("body").mouseup(function(){ 
					if(! mouse_is_inside) $("#"+obj.button).hide();
				});
			});	
		}

		function replaceByValue(json, field, oldvalue, newvalue ) {
			for( var k = 0; k < json.length; ++k ) {
				if( oldvalue == json[k][field] ) {
					json[k][field] = newvalue ;
				}
			}
			return json;
		}
		function addNewElement(json,id,code,lang,script,button,affiche){

				json.push({
					"id": id,
					"code": code,
					"lang": lang,
					"script": script,
					"button":button,
					"affiche":affiche,
				});
			
			console.log(json);		
		}
		function removeElement(myObj,id,code,lang,script,button,supprime){
			myObj = jQuery.grep(myObj, function( n, i ) {
			  myObj[i].affiche = supprime;
			});
			console.log(myObj);
		}
		function pre_add_id(myObj){
			var j=0;
			$('pre').each(function(){
				$(this).attr('id', myObj[j].id);
				j++;
			});		
		}
		
	$('#create_file').click(function(){
		//affiche myObj
		console.log(myObj);
		var current_id = $('.code').attr("id");
		
		// $("div[id^='code_insert']").each(function (i, el) {
			// $("div[id^='code_insert']").html(value)
			// var text = this.id;
			// value = text.replace("code_insert", "value");
			// $("#"+this.id).text(eval(value));
			// $("#"+this.id).html(value);
			 // console.log(el);
		// });
		//$('.button').hide();
		
		var script = "";

		$.each(myObj, function(i, obj){
			//$( ".hello" ).remove();
			if(document.getElementById(obj.id)) {
			  //it doesn't exist
			  $("#"+obj.id).html("<textarea class= 'code' id ='"+obj.id+"'>"+obj.code+"</textarea>");
			}
			
			console.log($("#"+obj.id).html());
			if(!script.includes(obj.script)){
				script += obj.script;
			}else{
				script="";
			}
			
		});
		//set id to all pre
		var code = $('#editeur').html();	
				

				var numero_paragraph = "<?php echo $numero_paragraph;?>";
				var folder = "<?php echo $folder;?>";
				var numero_chapter = "<?php echo $numero_chapter;?>";
				
				$.ajax({
					url:'<?php echo base_url()?>index.php/writer/createParagraph',
					type:'post',
					data: {'html': code,
							'folder': folder,
							'numero_paragraph': numero_paragraph,
							'numero_chapter': numero_chapter,
							'script':script
							},
					success: function(response){
						$('#editeur').html(response);
						show_button_supprime();
					},
					error:function(){
						
					}
				});
			});
				$('#editeur').addClass('article');
			

			$('#uploadButton').on('click',function(){
				//jQuery('#file').click();
				var form = $('#form_image')[0];
				var formData = new FormData(form);
				
				// var w = $("#img_preload").width;
				// var h = $("#img_preload").height;
				// $('#h').val(h);
				// $('#w').val(w);
				//formData.append('image', $('input[type=file]')[0].files[0]);
				console.log(formData);
				$.ajax({
					url:'<?php echo base_url()?>index.php/writer/uploadImage',
					type: "POST",             
					data: formData, 
					contentType: false,       
					cache: false,             
					processData:false,
					success: function(response){
						//console.log(response);
						var image = '<img class = "image_editeur" width="'+width+'" height="'+height+'"src="'+response+'"/><br> ';
						//pasteHtmlAtCaret(image);
						if($('#editeur:contains("@image")')){
							$( "#image_insert" ).replaceWith( image );
						}						
						//$('img').addClass('affiche');
					}
				});
			});

 
function pasteHtmlAtCaret(html) {
    var sel, range;
    if (window.getSelection) {
        // IE9 and non-IE
        sel = window.getSelection();
		console.log(sel);
        if (sel.getRangeAt && sel.rangeCount) {
            range = sel.getRangeAt(0);
            range.deleteContents();

            // Range.createContextualFragment() would be useful here but is
            // non-standard and not supported in all browsers (IE9, for one)
            var el = document.createElement("div");
            el.innerHTML = html;
            var frag = document.createDocumentFragment(), node, lastNode;
            while ( (node = el.firstChild) ) {
                lastNode = frag.appendChild(node);
            }
            range.insertNode(frag);
            
            // Preserve the selection
            if (lastNode) {
                range = range.cloneRange();
                range.setStartAfter(lastNode);
                range.collapse(true);
                sel.removeAllRanges();
                sel.addRange(range);
            }
        }
    } else if (document.selection && document.selection.type != "Control") {
        // IE < 9
        document.selection.createRange().pasteHTML(html);
    }
}	
var sel;
$('#editeur').on('click',function(){
	 sel = window.getSelection();
	 //console.log(sel);
});

$('#remarqueButton').click(function(){

	var remarque = '<br><div class="remarque_editor">'+$('#remarque_editor').html()+'</div><br>';
	//document.getElementById('editeur').focus();
	if($('#editeur:contains("@remarque")')){
		$( "#remarque_insert" ).replaceWith( remarque );
	}

});
$('#questionButton').click(function(){

	var question = '<br><div class="question_editor">'+$('#question_editor').html()+'</div><br>';
	//document.getElementById('editeur').focus();
	if($('#editeur:contains("@question")')){
		$( "#question_insert" ).replaceWith( question );
	}

});
$('#erreurButton').click(function(){

	var erreur = '<br><div class="erreur_editor">'+$('#erreur_editor').html()+'</div><br>';
	if($('#editeur:contains("@erreur")')){
		$( "#erreur_insert" ).replaceWith( erreur );
	}

});
$('#linkButton').click(function(){

	var link = '<a href="'+$("#link").val()+'" target="_blank" >'+$("#txt_affiche").val()+'</a>';
	if($('#editeur:contains("@link")')){
		$( "#link_insert" ).replaceWith( link );
	}

});

$('#informationButton').click(function(){

	var information = '<br><div class="information_editor">'+$('#information_editor').html()+'</div><br>';
	//document.getElementById('editeur').focus();
	if($('#editeur:contains("@information")')){
		$( "#information_insert" ).replaceWith( information );
	}

});

			</script>
		</div>
	</body>
</html>