<?php $options = get_fields('options'); ?>

<!--footer start-->
<footer id="footer" class="footer">
    <div class="container">
        <div class="hm-footer-copyright text-center">
            <div class="footer-social">
                <?php if ($options && isset($options['social_links'])) {
                    $social_links = $options['social_links'];

                    foreach ($social_links as $link) {
                        $name = esc_html($link['name']);
                        $url = esc_url($link['link']);
                        $fa_image = esc_attr($link['fa_image']);

                        echo '<a href="' . $url . '" target="_blank"><i class="' . $fa_image . '"></i></a>';
                    }
                } ?>
            </div>


            <p>
                <?php if ($options && isset($options['copyright']['copyright_text'])) {
                    $copyright_text = $options['copyright']['copyright_text'];
                    echo esc_html($copyright_text);
                } ?>

                <a href="<?php if ($options && isset($options['copyright']['copyright_link'])) {
                    $copyright_text = $options['copyright']['copyright_link'];
                    echo esc_html($copyright_text);
                } ?>">

                    <?php if ($options && isset($options['copyright']['copyright_link_text'])) {
                        $copyright_text = $options['copyright']['copyright_link_text'];
                        echo esc_html($copyright_text);
                    } ?>

                </a>
            </p><!--/p-->
        </div><!--/.text-center-->
    </div><!--/.container-->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div><!--/.scroll-Top-->

</footer><!--/.footer-->
<!--footer end-->

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- wp footer  -->
<?php wp_footer() ?>

</body>

</html>