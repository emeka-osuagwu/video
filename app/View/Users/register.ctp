
<div class="upload">
	
	<div class="container">
		
	<div>


		  <div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="profile" class="">
				<div class="upload-grids">
					<div class="upload-right" style="overflow: hidden;">
<?php
           echo $this->Session->flash();
           echo $this->element('form_validator');
           ?>
						<form action="/cakephp/users/register" method="post" class="col-md-6 col-md-offset-3">
						
							<center>
								<h1>Register</h1>
							</center>
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" name="data[User][name]" class="form-control" id="exampleInputEmail1" placeholder="Username">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="text" name="data[User][email]" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
							
							<div class="form-group"></label>
								<label for="exampleInputEmail1">Passwrd</label>
								<input name="data[User][password]" type="text" class="form-control" id="exampleInputEmail1" placeholder="Password">
							</div>

							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div>
					<div class="clearfix visible-xs-block"></div>
				</div>
			</div>
		  </div>



	</div>
	

	</div>	
</div>
