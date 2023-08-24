<?php

get_header();

?>

<!--populer-products start -->
<?php echo get_template_part('/template-parts/home/popular-products') ?>
<!--populer-products end-->

<!--new-arrivals start -->
<?php echo get_template_part('/template-parts/home/new-arrivals') ?>
<!--new-arrivals end -->

<!--sofa-collection start -->
<?php echo get_template_part('/template-parts/home/collection') ?>
<!--sofa-collection end -->

<!--feature start -->
<?php echo get_template_part('/template-parts/home/feature-products') ?>
<!--feature end -->

<!--blog start -->
<?php echo get_template_part('/template-parts/home/blog') ?>
<!--blog end -->

<!-- clients strat -->
<?php echo get_template_part('/template-parts/home/clients') ?>
<!-- clients end -->

<!--newsletter strat -->
<?php echo get_template_part('/template-parts/home/newsletter') ?>
<!--newsletter end -->

<?php

get_footer();

?>