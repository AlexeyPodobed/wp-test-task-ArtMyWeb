<?php
$new_arrivals_group = get_field('new_arrivals');
$product_list = $new_arrivals_group['product_list'];
?>

<section id="new-arrivals" class="new-arrivals">
    <div class="container">
        <div class="section-header">
            <h2>
                <?php echo esc_html($new_arrivals_group['section_title']); ?>
            </h2>
        </div><!--/.section-header-->
        <div class="new-arrivals-content">
            <div class="row">

                <?php
                if ($product_list):
                    foreach ($product_list as $product):
                        $yellow_sale = $product['yellow_sale'];
                        $green_sale = $product['green_sale'];
                        $product_image = $product['image'];

                        $yellow_sale_class = $yellow_sale ? 'bg-1' : 'hidden';
                        $green_sale_class = $green_sale ? 'bg-2' : 'hidden';

                        ?>

                        <div class="col-md-3 col-sm-4">
                            <div class="single-new-arrival">
                                <div class="single-new-arrival-bg">
                                    <img src="<?php echo $product_image['url']; ?>" alt="new-arrivals images">
                                    <div class="single-new-arrival-bg-overlay"></div>
                                    <div
                                        class="sale <?php echo esc_attr($yellow_sale_class); ?>">
                                        <p>sale</p>
                                    </div>
                                    <div
                                        class="sale <?php echo esc_attr($green_sale_class); ?>">
                                        <p>sale</p>
                                    </div>
                                    <div class="new-arrival-cart">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <a href="#">add <span>to </span> cart</a>
                                        </p>
                                        <p class="arrival-review pull-right">
                                            <span class="lnr lnr-heart"></span>
                                            <span class="lnr lnr-frame-expand"></span>
                                        </p>
                                    </div>
                                </div>
                                <h4><a href="#">
                                        <?php
                                        $product_link = $product['link'];
                                        if ($product_link): ?>
                                            <a href="<?php echo esc_url($product_link['url']); ?>">
                                                <?php echo wp_kses_post($product_link['title']); ?>
                                            </a>
                                        <?php endif; ?>
                                    </a></h4>
                                <p class="arrival-product-price"><?php echo esc_html($product['price']); ?></p>
                            </div>
                        </div>

                    <?php endforeach;
                endif;
                ?>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.new-arrivals-->