<?php

$post_object = get_field('medical_reviewer');

if( $post_object ): 

  // override $post
  $post = $post_object;
  setup_postdata( $post ); 

  ?>
      
      <div class="mr-headshot-block">
        <div class="mr-headshot">
        <?php echo get_the_post_thumbnail( $post_id, $size, array('itemprop' => 'image') ); ?>
      </div>
    </div>
        <div class="mr-text">Medically Reviewed by<br> <a class="mr-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <span>Written by Addiction Resource Editorial Staff<?php the_field('author'); ?></span>
    </div>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>