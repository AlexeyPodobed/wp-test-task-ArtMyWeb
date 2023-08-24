<?php
$blog_group = get_field('blog');
$blog_posts = $blog_group['blog_posts'];
?>


<section id="blog" class="blog">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html($blog_group['blog_title']); ?></h2>
        </div><!--/.section-header-->
        <div class="blog-content">
            <div class="row">

                <?php if ($blog_posts):
                    foreach ($blog_posts as $blog_post):

                        $blog_post_image = $blog_post['post_image'];
                        ?>

                        <div class="col-sm-4">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <img src="<?php echo $blog_post_image['url']; ?>" alt="blog image">
                                    <div class="single-blog-img-overlay"></div>
                                </div>
                                <div class="single-blog-txt">
                                    <h2>
                                        <?php
                                        $blog_post_link = $blog_post['post_title'];
                                        if ($blog_post_link): ?>
                                            <a href="<?php echo esc_url($blog_post_link['url']); ?>">
                                                <?php echo wp_kses_post($blog_post_link['title']); ?>
                                            </a>
                                        <?php endif; ?>
                                    </h2>
                                    <h3>By
                                        <?php
                                        $blog_author_link = $blog_post['post_author'];
                                        if ($blog_author_link): ?>
                                            <a href="<?php echo esc_url($blog_author_link['url']); ?>">
                                                <?php echo wp_kses_post($blog_author_link['title']); ?>
                                            </a>
                                        <?php endif; ?> / <?php echo esc_html($blog_post['post_date']); ?>
                                    </h3>
                                    <p>
                                        <?php echo esc_html($blog_post['post_content']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>


                    <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.blog-->