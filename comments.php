<?php 
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h1><?php _e('Password Protected'); ?></h1>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

$oddcomment = 'alt';

?>

	<?php if ($comments) : ?>
		<a data-toggle="collapse" data-target="#commentContainer" class="btn btn-comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</a>
		<div id="commentContainer" class="collapse">
			<ul class="commentlist">
				<?php foreach ($comments as $comment) : ?>
					<div class="row commentBlock">
						<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
							<div class="commentmetadata col-md-3">
								<p><strong><?php comment_author_link() ?></strong></p> 
								<p><?php comment_date('F jS, Y') ?><?php edit_comment_link('Edit Comment','',''); ?></p>
					 			<?php if ($comment->comment_approved == '0') : ?>
									<em><?php _e('Your comment is awaiting moderation.'); ?></em>
					 			<?php endif; ?>
							</div>
							<div class="commentBody col-md-9">
								<?php comment_text() ?>
							</div>
						</li>
					</div>
					<?php /* Changes every other comment to a different class */
						if ('alt' == $oddcomment) $oddcomment = '';
						else $oddcomment = 'alt';
					?>
				<?php endforeach; ?>
			</ul>
			</div>
	<?php else :  ?>

		<?php if ('open' == $post->comment_status) : ?>

			<!-- If comments are open, but there are no comments. -->

		<?php else : // comments are closed ?>

			<!-- If comments are closed. -->
			<p class="nocomments">Comments are closed.</p>

		<?php endif; ?>

	<?php endif; ?>

	<?php if ('open' == $post->comment_status) : ?>
		<a data-toggle="collapse" data-target="#demo" class="btn btn-comments">Leave a Reply <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>

		<div id="demo" class="collapse">

			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				
				<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
			
			<?php else : ?>

				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			
					<?php if ( $user_ID ) : ?>

						<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

					<?php else : ?>

						<p><input class="form-control" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
						
						<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

						<p><input  class="form-control" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
						
						<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

						<p><input class="form-control" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
						
						<label for="url"><small>Website</small></label></p>

					<?php endif; ?>

						<p><textarea class="form-control" placeholder="Leave your comment here" name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

						<p>
							<input class="form-control btn btn-comments" name="submit" type="submit" id="submit" tabindex="5" value="Post Comment" />
							<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
						</p>

					<?php do_action('comment_form', $post->ID); ?>

				</form>
		</div>

	<?php endif; ?>


<?php endif; ?>