<div class="col-md-4"></div>
<?php
if($_POST){
	header('Location: index.php');
}
?>
<div class="col-md-4">
	<div class="login-layout-wrapper">
		<div class="col-md-12">
			<h2 class="text-center">Login</h2>
			<form class="form" method="post">
				<div class="form-group col-md-12">
					<label for="username"><i class="fa fa-user"></i>&nbsp;Username</label>
					<input type="text" class="form-control col-md-12" name="username" id="username" required placeholder="Username" />
				</div>
				<div class="form-group col-md-12">
					<label for="password"><i class="fa fa-lock"></i>&nbsp;Password</label>
					<input type="password" class="form-control col-md-12" name="password" id="password" required placeholder="password" />
				</div>
				<div class="form-group col-md-12">
					<button type="submit" class="col-md-12 btn btn-md btn-success">
						Login
					</button>
				</div>
			</form>
		</div>
	</div>	
</div>

<div class="col-md-4"></div>