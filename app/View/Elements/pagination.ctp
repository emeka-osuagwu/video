<?php
//$params = $this->Paginator->params();
//if ($params['pageCount'] > 1) {
	?>
	
	<div class="paginator text-center">
		
		<ul class="pagination">

	
			<?php
			echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));

			
			echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
			?>
		</ul>


	</div>
	
<?php //} ?>