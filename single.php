<?php

get_header();
the_post();

?>

<main class="main">
	<?php get_template_part('parts/single', 'blog') ?>
</main>

<?php get_footer() ?>