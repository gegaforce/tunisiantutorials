<style>
	div.contain{
		margin-top:7cm;
		margin: 0 auto;
		width:50%;
		margin-left:25%;
	}
	.label1{
		float:right;
		direction:rtl;
		font-family: 'DroidArabicKufiRegular';
		font-style: normal;
		font-size: 18px;
		font-weight: 400;
		margin-left:13.5cm;
		foreground-color:black;

	}
</style>
<div class="contain">
	<form action="<?= site_url('home/connexion');?>" method="post">
	  <div class="form-group">
		<label  class="label1" id="label1" for="exampleInputEmail1">إسم المستخدم</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	  </div>
	  <div class="form-group">
		<label   class="label1"  id="label2" for="exampleInputPassword1">كلمة العبور</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">موافق</button>
	</form>
</div>
