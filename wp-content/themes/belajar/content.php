<?php
	$post = get_post();
	$thumb = get_post_thumbnail_id();
	$image = wp_get_attachment_url($thumb, 'full');
?>
<!-- STANDARD POST -->
								<div class="ol-content-post wow fadeInUp" data-wow-duration="0.4s">
									<!-- all meta post -->
									<div class="all-meta-post">
										<div class="meta-post-date"><?php the_time('d'); ?></div>
										<div class="meta-post-month">
											<?php the_time('F, Y'); ?>
											<span class="seperator-post">/</span>
											<a href="<?php the_permalink(); ?>"><?php comments_number('0 Comment', '1 Comment', '% Comments') ?></a>
											<span class="seperator-post">/</span>
											<?php _e('Posted By', 'belajar theme'); ?> <?php the_author_posts_link(); ?>
										</div>
									</div>
									<!-- image post -->
									<div class="wrap-image-post">
										<a href="<?php the_permalink(); ?>">
											<?php if ($image) { ?>
											<img src="<?php echo $image; ?>" alt="">
											<?php } else { ?>
											<img src="http://placehold.it/850x600" alt="">
											<?php } ?>
											<div class="overlay-image-post"></div>
										</a>
									</div>
									<!-- meta category -->
									<div class="wrap-meta-category-post">
										<span class="meta-cat-post">
											<a href="#">Style</a>
										</span>
									</div>
									<!-- title post -->
									<div class="title-post">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</div>
									<!-- desc post -->
									<div class="desc-post">
										<p>
											<?php 
												if (is_singular()) { 
													the_content();
												} else {
													the_excerpt();
												}
											?>
										</p>
									</div>
									<div class="read-share">
										<div class="row">
											<div class="col-xs-8">
												<div class="wrap-readmore">
													<a href="#"><span class="readmore-post">Continue Reading</span></a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="wrap-share-post">
													<span class="share-post"><i class="fa fa-share-alt"></i></span>
												</div>
											</div>
										</div>
									</div>
									<!-- share after click share -->
									<div class="wrap-share-click-social">
										<ul>
											<li class="share-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
									<!-- seperator -->
									<div class="seperator-post-bottom"></div>
								</div>