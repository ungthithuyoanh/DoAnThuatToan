
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
			<div class="card">
				<div class="card-header">

					<h2 style="font-weight: bold;">Đăng nhập</h2>
				</div>
				<div class="card-body">
					<?php 
						if(isset($verifiErr)){
					 ?>
					 	<span class="text-danger"><?=$verifiErr?></span>
					 <?php 
					 	} ?>
					<form action="" method="POST">
						<div class="form-group"> 	
							<label>Tài khoản / Email: (*) </label>
							<input type="text" class="form-control" name="login" 
							<?php if(isset($login)){ ?>
								value="<?php echo $login;?>"
								<?php } ?> 
								id='login' placeholder="Nhập tài khoản / email" minlength=6 maxlength="50" required/> 
							<?php
							if(isset($errLogin)){
								?>
								<span class="text-danger"><?=$errLogin?></span>
								<?php								
							}
							?>

						</div>
						<div class="form-group"> 
							<label>Mật khẩu: (*)</label>
							<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" minlength=6 maxlength="100" required/>
							<?php 
							if(isset($errPassword)){
								?>
								<span class="text-danger"><?=$errPassword?></span>
								<?php
							}
							?>
						</div>
						<div class="form-group">
							<a href="../controller/c_resetPassword.php">Quên mật khẩu?</a>	
						</div>
								
						<input type="submit" value="Đăng Nhập" class="btn btn-success"> 
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>