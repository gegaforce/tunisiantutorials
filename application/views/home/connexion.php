<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<p class="article connexion"><a data-toggle="modal"  data-target="#ModalConnexion" href="" role="button"><u>أدخل الى الموقع</u></a> أو <a data-toggle="modal"  data-target="#ModalSignin" href="" role="button"><u>قم بالتسجيل</u></a>  للاستفادة من جميع ميزات هذه الدورة التدريبية!</p>
  <!--
  
  ###############################          CONNEXION            #######################################
  
  -->

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="ModalConnexion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
		<div class="modal-body">
<form dir="rtl" action = "<?= site_url('membre/connexion');?>" method="post">
  <div class="form-group">
    <h3 for="exampleInputEmail1">البريد الإلكترونيّ</h3>
    <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="أدخل عنوان البريد الإلكترونيّ">
  </div>
  <div class="form-group">
    <h3 for="exampleInputPassword1">كلمة السرّ</h3>
    <input type="password" class="form-control" name="exampleInputPassword1" placeholder="كلمة السرّ">
  </div>
  <button type="submit" class="btn btn-primary">أرسل</button>
</form>          
        </div>

      </div>
      
    </div>
  </div> 
<script>
$('#connButton').click(function(){alert("done")});
</script>  
<!--###############################          SIGN IN            #######################################-->

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="ModalSignin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
				<div class="modal-body">
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>         
        </div>
      </div>
      
    </div>
  </div> 