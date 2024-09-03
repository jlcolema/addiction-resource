<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Panther
 */

?>

							<li class="br-list-item">
                    				<figure class="br-fig">
                                        <a href="<?php the_permalink(); ?>">
	                                        <picture>
	                                            <?php the_post_thumbnail('custom-blog'); ?>
	                                        </picture>
                                        </a>
                                    </figure>
                                	<div class="br-blck">
		                                <h2 class="br-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		                                <p class="br-sub-title"><a href="<?php the_permalink(); ?>"><?php echo excerpt('20');?></a></p>
		                                <a class="brarw"  href="<?php the_permalink(); ?>">READ MORE <i class="fal fa-arrow-right"></i></a>
		                            </div>
                            </li>
