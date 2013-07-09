<?php if(have_comments()) : ?>
	<ul>
		<?php wp_list_comments('callback=custom_comment_display'); ?>
	</ul>
<?php endif; ?>
<?php comment_form(); ?>

<script>
jQuery(document).ready(function($) {
    $('input#submit').addClass('btn btn-info');
});
</script>