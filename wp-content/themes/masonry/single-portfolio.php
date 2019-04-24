<?php
get_header();
$tittle=get_field('tittle');
?>
    <!-- content -->
    <main class="content">
        <!-- top section -->
        <section class="inner-top">
            <div class="wrapper">
                <h1><?=get_the_title();?></h1>
            </div>
        </section>
        <!-- end top section -->
        <section class="section-cols">
            <div class="wrapper">
                <?php if( have_rows('single_tasks') ): ?>
                <div class="cols">
                    <?php while ( have_rows('single_tasks') ) : the_row();
                        $single_name = get_sub_field('single_name');
                        $single_image = get_sub_field('single_image');
                        $single_description = get_sub_field('single_description');
                        ?>

                        <div class="col">
                            <h4><img src="<?= $single_image; ?>" alt=""/><?=$single_name?></h4>
                            <p><?= $single_description; ?></p>

                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
    <!-- end content -->

<?php get_template_part("components/content", "header"); ?>

<?php get_template_part("components/content", "footer"); ?>

<?php get_footer();?>