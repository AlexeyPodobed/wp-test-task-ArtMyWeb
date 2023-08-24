<?php
$feature_group = get_field('feature');
$feature_products = $feature_group['products'];
?>

<section id="feature" class="feature">
    <div class="container">
        <div class="section-header">
            <h2>
                <?php echo esc_html($feature_group['title']); ?>
            </h2>
        </div><!--/.section-header-->
        <div class="feature-content">
            <div class="row">

                <?php if ($feature_products):
                    foreach ($feature_products as $product):

                        $product_image = $product['image'];

                        ?>
                        <div class="col-sm-3">
                            <div class="single-feature">
                                <img src="<?php echo $product_image['url']; ?>" alt="feature image">
                                <div class="single-feature-txt text-center">
                                    <p>
                                        <?php
                                        $rating = intval($product['rating']);
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating) {
                                                echo '<i class="fa fa-star"></i>';
                                            } else {
                                                echo '<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>';
                                            }
                                        }
                                        ?>
                                        <span class="feature-review">(45 review)</span>
                                    </p>
                                    <h3>
                                        <?php
                                        $product_link = $product['product_name'];
                                        if ($product_link): ?>
                                            <a href="<?php echo esc_url($product_link['url']); ?>">
                                                <?php echo wp_kses_post($product_link['title']); ?>
                                            </a>
                                        <?php endif; ?>

                                    </h3>
                                    <h5>
                                        <?php echo esc_html($product['price']); ?>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    <?php endforeach;
                endif; ?>

            </div>
        </div>
    </div><!--/.container-->

</section><!--/.feature-->