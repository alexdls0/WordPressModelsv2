<div class="col-lg-4 sidebar ftco-animate">
        <div class="miformulario">
    	  <?php get_search_form(); ?>
		</div>
		  <!--div class="sidebar-box">
				<form action="#" class="search-form">
				<div class="form-group">
					<span class="icon icon-search"></span>
					<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
				</div>
				</form>
			</div-->

		<div class="sidebar-box ftco-animate centrado sinmargen">
			<h3>Nube de Tags</h3>
			<?php 
				if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget Area')):
			?>
			<h6>Lo sentimos, no existe un widget en este tema para visualizar una nube de tags.</h6>
			<?php
				endif;
			?>
		</div>
</div>