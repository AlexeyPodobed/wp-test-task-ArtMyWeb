<?php
$popular_group = get_field('popular_products');
$product1 = $popular_group['product_1'];
$product2 = $popular_group['product_2'];
$product3 = $popular_group['product_3'];
?>

<section id="populer-products" class="populer-products">
    <div class="container">
        <div class="populer-products-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="single-populer-products">
                        <div class="single-populer-product-img mt40">
                            <img src="<?php echo esc_url($product1['product_image_1']); ?>"
                                alt="populer-products images">
                        </div>
                        <h2>
                            <?php
                            $product_link_1 = $product1['product_link_1'];
                            if ($product_link_1): ?>
                                <a href="<?php echo esc_url($product_link_1['url']); ?>">
                                    <?php echo wp_kses_post($product_link_1['title']); ?>
                                </a>
                            <?php endif; ?>
                        </h2>
                        <div class="single-populer-products-para">
                            <p>
                                <?php echo esc_html($product1['product_description_1']); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-populer-products">
                        <div class="single-inner-populer-products">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-inner-populer-product-img">
                                        <img src="<?php echo esc_url($product2['product_image_2']); ?>"
                                            alt="populer-products images">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="single-inner-populer-product-txt">
                                        <h2>
                                            <?php
                                            $product_link_2 = $product2['product_link_2'];
                                            if ($product_link_2):
                                                $link_title = htmlspecialchars_decode($product_link_2['title']);
                                                ?>
                                                <a href="<?php echo esc_url($product_link_2['url']); ?>">
                                                    <?php echo $link_title; ?>
                                                </a>
                                            <?php endif; ?>
                                        </h2>
                                        <p>
                                            <?php echo esc_html($product2['product_description_2']); ?>
                                        </p>
                                        <div class="populer-products-price">
                                            <h4>
                                                <?php echo esc_html($product2['product_message_2']); ?> <span>
                                                    <?php echo esc_html($product2['product_price_2']); ?>
                                                </span>
                                            </h4>
                                        </div>
                                        <button class="btn-cart welcome-add-cart populer-products-btn"
                                            onclick="window.location.href='#'">
                                            <?php echo esc_html($product2['product_btn_2']); ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-populer-products">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="<?php echo esc_url($product3['product_image_3']); ?>"
                                    alt="populer-products images">
                            </div>
                            <h2>
                                <?php
                                $product_link_3 = $product3['product_link_3'];
                                if ($product_link_3): ?>
                                    <a href="<?php echo esc_url($product_link_3['url']); ?>">
                                        <?php echo wp_kses_post($product_link_3['title']); ?>
                                    </a>
                                <?php endif; ?>
                            </h2>
                            <div class="single-populer-products-para">
                                <p>
                                    <?php echo esc_html($product3['product_description_3']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.populer-products-->
<!--populer-products end-->