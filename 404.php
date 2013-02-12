<?php /* 404.php */
$page_title = "Error 404";
$page_canonical = "404";
$extra_meta = "<meta http-equiv='Refresh' content='5; URL=/' />
	<meta name='robots' content='noindex,nofollow' />
";
include('header.php'); ?>

		<section class="body-text-centered">
			<h1>Error 404 - That page does not exist!</h1>
			<blockquote>
				Your request for a free estimate has been sent to Radiant Window Cleaning!<br>
				You will be redirected in 5 seconds.
			</blockquote>
		</section>

<?php include('footer.php'); ?>