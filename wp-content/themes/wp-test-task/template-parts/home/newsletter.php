<?php
$newsletter_group = get_field('newsletter');
$newsletter_menus = $newsletter_group['menus'];

?>

<section id="newsletter" class="newsletter">
    <div class="container">
        <div class="hm-footer-details">
            <div class="row">

                <?php if ($newsletter_menus):
                    foreach ($newsletter_menus as $menu): ?>
                        <div class=" col-md-3 col-sm-6 col-xs-12">
                            <div class="hm-footer-widget">
                                <div class="hm-foot-title">
                                    <h4>
                                        <?php echo esc_html($menu['menu_title']); ?>
                                    </h4>
                                </div><!--/.hm-foot-title-->
                                <div class="hm-foot-menu">
                                    <ul>
                                        <?php
                                        $menu_links = $menu['menu_links'];
                                        if ($menu_links):
                                            foreach ($menu_links as $link):
                                                ?>
                                                <li>
                                                    <?php
                                                    $link_content = $link['link'];
                                                    if ($link_content): ?>
                                                        <a href="<?php echo esc_url($link_content['url']); ?>">
                                                            <?php echo wp_kses_post($link_content['title']); ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </li>
                                                <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </ul><!--/ul-->
                                </div><!--/.hm-foot-menu-->
                            </div><!--/.hm-footer-widget-->
                        </div><!--/.col-->
                    <?php endforeach;
                endif; ?>

                <div class=" col-md-3 col-sm-6  col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4>
                                <?php echo esc_html($newsletter_group['title']); ?>
                            </h4>
                        </div><!--/.hm-foot-title-->
                        <div class="hm-foot-para">
                            <p>
                                <?php echo esc_html($newsletter_group['newsletter_text']); ?>
                            </p>
                        </div><!--/.hm-foot-para-->
                        <div class="hm-foot-email">
                            <div class="foot-email-box">
                                <input type="text" class="form-control"
                                    placeholder="<?php echo esc_html($newsletter_group['email_placeholder']); ?>">
                            </div><!--/.foot-email-box-->
                            <div class="foot-email-subscribe">
                                <span><i class="fa fa-location-arrow"></i></span>
                            </div><!--/.foot-email-icon-->
                        </div><!--/.hm-foot-email-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.hm-footer-details-->

    </div><!--/.container-->

</section><!--/newsletter-->