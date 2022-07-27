<div class="inlineBlockV2">
		<?php $queried_object = get_queried_object();
		if( get_field('inline_first_line_v2', $queried_object->ID)) {?>
			<p class="inlineHeader"><?php the_field('inline_first_line_v2', $queried_object->ID); ?></p>
		<?php } else  { ?>
			<p class="inlineHeader">Don't wait. Get help now.</p>
		<?php } ?>
		<?php $queried_object = get_queried_object();
		if( get_field('inline_second_line_v2', $queried_object->ID)) {?>
			<p><?php the_field('inline_second_line_v2', $queried_object->ID); ?> <span><?php the_field('yellow_emphasis', $queried_object->ID); ?></span></p>
		<?php } else  { ?>
			<p>Call to be connected with a <span>compassionate treatment specialist.</span></p>
		<?php } ?>
	<a href="tel:1-844-616-3400" class="btn btnInline"><i class="fa fa-phone" aria-hidden="true"></i> (844) 616-3400</a>
</div>