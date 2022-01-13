<style>
.container{
	text-align:center;
	margin-left:25%;
	margin-right:25%;
}
.premium_solo{
	height:217px;
	width:25%;
	background-color:red;
	float:left;
}
.premium_plus{
	background-color:green;
	height:217px;
	width:25%;
	margin-left:30%;
}
.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>
<div class ="container">

</div>

 <div class="footer">
	<p>premium plus<br>900 dt </p><br>
	<input type = "button" id="button" value="ajouter" />
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#button").click(function(){
    $('.container').append('');    

  });
});
</script>