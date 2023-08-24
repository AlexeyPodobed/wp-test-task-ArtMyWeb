<?php
$clients_group = get_field('clients');
$clients_logos = $clients_group['client_logos'];
?>

<section id="clients" class="clients">
    <div class="container">
        <div class="owl-carousel owl-theme" id="client">
            <?php if ($clients_logos):
                foreach ($clients_logos as $logo):

                    $logo_image = $logo['logo_image'];
                    $logo_url = $logo['logo_url'];

                    ?>

                    <div class="item">
                        <a href="<?php echo $logo_url; ?>">
                            <img src="<?php echo $logo_image['url']; ?>" alt="brand-image" />
                        </a>
                    </div><!--/.item-->

                <?php endforeach;
            endif; ?>
        </div><!--/.owl-carousel-->

    </div><!--/.container-->

</section><!--/.clients-->