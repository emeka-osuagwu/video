<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="show-top-grids">
		<div class="col-sm-8 single-left">
			<div class="song">
				<div class="song-info">
					<h3><?= h($file->title) ?></h3>	
				</div>
				<div class="video-grid">
					<iframe src="https://www.youtube.com/embed/oYiT-vLjhC4" allowfullscreen></iframe>
				</div>
			</div>
			<div class="song-grid-right">
				
			</div>
			<div class="clearfix"> </div>
			<div class="published">
				<script src="jquery.min.js"></script>
					<script>
						$(document).ready(function () {
							size_li = $("#myList li").size();
							x=1;
							$('#myList li:lt('+x+')').show();
							$('#loadMore').click(function () {
								x= (x+1 <= size_li) ? x+1 : size_li;
								$('#myList li:lt('+x+')').show();
							});
							$('#showLess').click(function () {
								x=(x-1<0) ? 1 : x-1;
								$('#myList li').not(':lt('+x+')').hide();
							});
						});
					</script>
					<div class="load_more">	
						<ul id="myList">
							<li>
								<h4>Published on 15 June 2015</h4>
								<p><?php echo $file['title']; ?></p>
								
							</li>
							<li>
								<div class="load-grids">
									<div class="load-grid">
										<p>Category</p>
									</div>
									<div class="load-grid">
										<a href="movies.html">Entertainment</a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
						</ul>
					</div>
			</div>
		
		</div>
		<div class="col-md-4 single-right">
			<h3>Up Next</h3>
			<div class="single-grid-right">
				<div class="single-right-grids">
					<div class="col-md-4 single-right-grid-left">
						<a href="single.html"><img src="images/r1.jpg" alt="" /></a>
					</div>
					<div class="col-md-8 single-right-grid-right">
						<a href="single.html" class="title"> Nullam interdum metus</a>
						<p class="author"><a href="#" class="author">John Maniya</a></p>
						<p class="views">2,114,200 views</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>