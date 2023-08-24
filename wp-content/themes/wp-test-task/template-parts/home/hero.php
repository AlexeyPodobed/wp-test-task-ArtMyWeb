<?php
$hero_group = get_field('hero');
$slides = $hero_group['slides'];
?>

<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--/.carousel-indicator -->
    <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span>
        </li>
        <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
    </ol><!-- /ol-->
    <!--/.carousel-indicator -->

    <!--/.carousel-inner -->
    <div class="carousel-inner" role="listbox">
        <?php if ($slides):
            foreach ($slides as $i => $slide):
                $active = $i === 0 ? 'active' : '';
                ?>

                <!-- .item -->
                <div class="item <?php echo $active; ?>">
                    <div class="single-slide-item slide<?php echo $i+1; ?>">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>
                                                    <?php echo esc_html($slide['slide_subheading']); ?>
                                                </h4>
                                                <h2>
                                                    <?php echo esc_html($slide['slide_heading']); ?>
                                                </h2>
                                                <p>
                                                    <?php echo esc_html($slide['slide_description']); ?>
                                                </p>
                                                <div class="packages-price">
                                                    <p>
                                                        <?php echo esc_html($slide['slide_price']); ?>
                                                        <del>
                                                            <?php echo esc_html($slide['slide_old_price']); ?>
                                                        </del>
                                                    </p>
                                                </div>
                                                <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                                    <span class="lnr lnr-plus-circle"></span>
                                                    add <span>to</span> cart
                                                </button>
                                                <button class="btn-cart welcome-add-cart welcome-more-info"
                                                    onclick="window.location.href='#'">
                                                    more info
                                                </button>
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="<?php echo esc_url($slide['slide_image']); ?>" alt="slider image">
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->


            <?php endforeach;
        endif; ?>

    </div><!-- /.carousel-inner-->

</div><!--/#header-carousel-->