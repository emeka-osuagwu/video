
<div class="upload">
	
	<div class="container">
		
	<div>


		  <div class="tab-content">
	
<?php
           echo $this->Session->flash();
           echo $this->element('form_validator');
           ?>
			<div role="tabpanel" class="tab-pane active" id="profile" class="">
				<div class="upload-grids">
					<div class="upload-right" style="overflow: hidden;">

						<div action="/cakephp/users/login" method="post" class="col-md-6 col-md-offset-3">
							<center>
								<h1>Login</h1>
							</center>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="text" name="data[User][email]" class="form-control" placeholder="Email" id="email">
							</div>
							
							<div class="form-group"></label>
								<label for="exampleInputEmail1">Passwrd</label>
								<input name="data[User][password]" type="password" class="form-control" id="password" placeholder="Password">
							</div>

							<button  type="submit" class="btn btn-default" onclick="login()">Login</button>
						</div>
					</div>
						  <div class="clearfix visible-xs-block"></div>
				</div>
			</div>
		  </div>



	</div>
	

	</div>	
</div>
