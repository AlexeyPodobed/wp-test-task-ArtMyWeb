<?php
$sofa_collection_group = get_field('sofa_collection');
$collection_items = $sofa_collection_group['collection_items'];
?>



<section id="sofa-collection">

    <?php if ($collection_items):
        foreach ($collection_items as $item):

            $collection_image = $item['background_image'];
            
            ?>
            <div class="owl-carousel owl-theme" id="collection-carousel">
                <div class="sofa-collection">
                    <div class="sofa-collection-bg"><img src="<?php echo $collection_image['url']; ?>" alt="sofa-collection-bg">
                    </div>
                    <div class="container">
                        <div class="sofa-collection-txt">
                            <h2>
                                <?php echo esc_html($item['title']); ?>
                            </h2>
                            <p>
                                <?php echo esc_html($item['description']); ?>
                            </p>
                            <div class="sofa-collection-price">
                                <h4><?php echo esc_html($item['price_title']); ?> <span><?php echo esc_html($item['price']); ?></span></h4>
                            </div>
                            <button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
                                <?php echo esc_html($item['button_text']); ?>
                            </button>
                        </div>
                    </div>
                </div><!--/.sofa-collection-->
            <?php endforeach;
    endif; ?>

</section><!--/.sofa-collection-->