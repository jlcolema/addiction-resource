<div class="inlineBlock">
		<?php $queried_object = get_queried_object();
		if( get_field('inline_first_line', $queried_object->ID)) {?>
			<p class="inlineHeader"><?php the_field('inline_first_line', $queried_object->ID); ?></p>
		<?php } else  { ?>
			<p class="inlineHeader">Don't wait. Get help now.</p>
		<?php } ?>
		<?php $queried_object = get_queried_object();
		if( get_field('inline_second_line', $queried_object->ID)) {?>
			<p><?php the_field('inline_second_line', $queried_object->ID); ?></p>
		<?php } else  { ?>
			<p>Call to be connected with a compassionate treatment specialist.</p>
		<?php } ?>
	<a href="tel:1-844-616-3400" class="btn btnInline"><i class="fa fa-phone" aria-hidden="true"></i> (844) 616-3400</a>
</div>