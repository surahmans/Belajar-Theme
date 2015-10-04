<?php get_header(); ?>
<div class="wrapper-ol-content">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-md-push-3">
							<div class="wrap-ol-content">
								<?php 
								if ( have_posts() ) {
									while ( have_posts() ) {
										the_post(); 
										//
										get_template_part('content');
										//
									} // end while
								} // end if
								?>

								<!-- Pagination -->
								<div class="wrap-pagination-index">
									<ul>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
									</ul>
								</div>

							</div>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>