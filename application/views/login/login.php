
	<div class="login col-md-4 mx-auto text-center">
	    <br/>
		<br/>
		<br/>
		<h1>Login</h1>

		<form method="post" action="<?php echo base_url('index.php/log/verify/')?>">
			<div class="form-group">
				<input type="text" name="identification" placeholder="Identification" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="Login" class="btn btn-primary">
			</div>
			<div class="form-group">
			<button type="button" class="btn btn-success" onclick="location.href='registry'" type="button">
             Registro</button>
			</div>
			
		</form>
	</div>