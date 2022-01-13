<article><br>أنظر إلى الكود التالي:<br><div dir="ltr" id="code_insert16" class=" ace_editor ace-monokai ace_dark" style="font-size: 18px; height: 108px;" draggable="false"><textarea class="code" id="code_insert16">for(Entry&lt;String, HttpServlet&gt; entry : servlets.entrySet()){
    String urlPattern = entry.getKey();
    HttpServlet servlet = entry.getValue();
}</textarea></div><button class="button" value="code_insert16" id="button16" style="display: none;">supprimer</button><br><br><br><br></article>
<script  class="script"id="script16">
var editor16 = ace.edit("code_insert16");
editor16.setFontSize(18);
editor16.renderer.setScrollMargin(10, 10, 10, 10);
editor16.setTheme("ace/theme/monokai");
editor16.session.setMode("ace/mode/java");
editor16.setAutoScrollEditorIntoView(true);
editor16.setOption("maxLines", 100);
editor16.setReadOnly(false);
value16 = editor16.getValue();
lang16 = "java";
</script>
