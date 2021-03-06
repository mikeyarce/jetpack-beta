<?php

$jp_beta_type = get_option( 'jp_beta_type' );
$jp_beta_autoupdate = get_option( 'jp_beta_autoupdate' );

$testing_checklist = jpbeta_get_testing_list();

?>
<style type="text/css">

	.jetpack_page_jetpack-beta .card h3 {
		margin-bottom: 20px;
	}

	.jetpack_page_jetpack-beta .card p strong {
		font-size: 14px;
	}

	.jetpack_page_jetpack-beta .card p {
		margin: 2px;
	}

	.jetpack_page_jetpack-beta .card p:nth-child(1) {
		margin-top: 15px;
	}

	.jetpack_page_jetpack-beta .card .feedback {
		margin-top: 20px;
		font-size: 18px;
		display: inline-block;
	}

	.jetpack_page_jetpack-beta .card .autoupdate {
		border-top: 1px #eee solid;
		margin: 20px 0;
	}

</style>

<h2 title="<?php _e('Jetpack Beta Settings', 'jpbeta'); ?>"><?php _e('Jetpack Beta Settings', 'jpbeta'); ?></h2>

<div class="card">
	<h3 title="<?php _e('Use Jetpack Version', 'jpbeta'); ?>"><?php _e('Use Jetpack Version', 'jpbeta'); ?>:</h3>

	<form method="post" id="jp_beta_choose_type">
		<ul>
			<li><p><input type="radio" name="version_type" value="latest" <?php echo ( $jp_beta_type == 'rc_only' ? '' : 'checked="checked"' ); ?>> <strong><?php _e('Latest Beta', 'jpbeta'); ?></strong></p><p><?php _e('This might be updated anywhere from once a week to multiple times a day.', 'jpbeta'); ?></p></li>
			<li><p><input type="radio" name="version_type" value="rc_only" <?php echo ( $jp_beta_type == 'rc_only' ? 'checked="checked"' : '' ); ?>> <strong><?php _e('Release Candidates Only', 'jpbeta'); ?></strong></p><p><?php _e('These are our tagged pre-releases, and there are generally 2-3 per Jetpack version.', 'jpbeta'); ?></p></li>
		</ul>
		<ul class="autoupdate">
			<li><p><input type="checkbox" name="auto_update" value="1" <?php echo ( $jp_beta_autoupdate == 'no' ? '' : 'checked="checked"' ); ?>> <strong><?php _e('Auto-Update Jetpack when new betas are available', 'jpbeta'); ?></strong></p><p><?php _e('This only runs every 12 hours, so you might want to manually update sooner.', 'jpbeta'); ?></p></li>
		</ul>
		<input class="button-primary" type="submit" value="<?php _e('Save my choice', 'jpbeta'); ?>" name="submit">
		<?php wp_nonce_field( 'jp_beta_recent_save' , 'jp_beta_recent_save_nonce' ); ?>
	</form>
</div>

<div class="card">
<?php echo $testing_checklist; ?>

<a title="Submit Your Feedback" class="feedback" href="http://jetpack.me/contact-support/"><?php _e('Submit Your Feedback', 'jpbeta'); ?></a>
</div>