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
        <section class="section-preview">
            <div class="preview">
                <?php if( have_rows('full_images') ): ?>
                    <div class="pols">
                        <?php
                        $counter = 0;
                        $classes = ['pol1','pol5','pol4','pol3','pol2','pol8','pol6','pol7','pol9','pol10'];

                        while ( have_rows('full_images') ) : the_row();

                            $image_for_second_block = get_sub_field('image_for_second_block'); ?>

                            <div class="pol <?= $classes[$counter]; ?>"><img src="<?= $image_for_second_block; ?>" alt=""/></div>

                            <?php
                            $counter++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </section>
        <section class="section-apply">

        </section>

    </main>
    <!-- end content -->

<?php get_template_part("components/content", "header"); ?>

<?php get_template_part("components/content", "footer"); ?>

<?php get_footer();?>