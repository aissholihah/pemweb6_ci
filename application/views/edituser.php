<!-- class="badge bg-primary text-wrap" -->
<div class="content-wrapper" > 
	<section class="content-header" >
    <h1>
      Data user
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data user</li>
    </ol>
  </section>

  <section class="content">
	<?php foreach($user as $usr) 	{	 ?>
		<form action="<?php echo base_url().'user/update'; ?>"
		method="POST">
		<!--  inputan -->   
			<div class="form-group">
				<label>Username </label>
				<input type="hidden" id="id" name="id_user" class="form-control" value="<?php echo $usr->id_user ?>" required>
				<input type="text" id="id_user"  name="username_user" class="form-control" value="<?php echo $usr->username_user ?>" required>	
			</div>

			<div class="form-group">
				<label>Password</label>			
				<input type="password" id="password_user" name="password_user" class="form-control" value="<?php echo $usr->password_user ?>" required>	
			</div>

			<div class="form-group">
				<label>Email</label>				
				<input type="email" id="email_user" name="email_user" class="form-control" value="<?php echo $usr->email_user ?>" required>				
			</div>

			<button type="button" onclick="resetteks()" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>			
		</form>
		<?php  } ?>

</section>

<!-- end div --> 
</div> 

<script>
function resetteks() {
  document.getElementById("id_user").value = "";		// harus sesuai dengan id di form nya
  document.getElementById("password_user").value = "";
  document.getElementById("email_user").value = "";

}
</script>