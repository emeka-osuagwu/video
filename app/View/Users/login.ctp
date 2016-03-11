
<div class="upload">
	
	<div class="container">
		
	<div>

		  <ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Audio</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
		  </ul>

		  <div class="tab-content">
			<div role="tabpanel" class="tab-pane " id="home">
				<div class="upload-grids">
					<div class="upload-right">
						<div class="upload-file">
							<div class="services-icon">
								<span class="glyphicon glyphicon-open" aria-hidden="true"></span>
							</div>
							<form action="/cakephp/file/upload" method="post" enctype="multipart/form-data">
								<input type="file" name="audio_file" value="Choose file..">
								<div class="upload-info">
									<button class="btn">Upload</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div role="tabpanel" class="tab-pane active" id="profile" class="">
				<div class="upload-grids">
					<div class="upload-right" style="overflow: hidden;">

						<form action="/cakephp/users/login" method="post" class="col-md-6 col-md-offset-3">
							
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
							
							<div class="form-group"></label>
								<label for="exampleInputEmail1">Passwrd</label>
								<input name="password" type="text" class="form-control" id="exampleInputEmail1" placeholder="Password">
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
