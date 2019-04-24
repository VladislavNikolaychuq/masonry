<?php
//Template Name: Домашняя страница
get_header();
$tittle=get_field('tittle');
?>
        <!-- content -->
        <main class="content">
            <!-- top section -->
            <section class="inner-top">
                <div class="wrapper">
                    <h1><?=$tittle?></h1>
                </div>
            </section>
            <!-- end top section -->
            <section class="section-cols">
                <div class="wrapper">
<?php if( have_rows('tasks') ): ?>
                    <div class="cols">
    <?php while ( have_rows('tasks') ) : the_row();
        $name_task = get_sub_field('name_task');
        $image_tasks = get_sub_field('image_tasks');
        $description_tasks = get_sub_field('description_tasks');
        ?>

                        <div class="col">
                            <h4><img src="<?= $image_tasks; ?>" alt=""/><?=$name_task?></h4>
                            <p><?= $description_tasks; ?></p>

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
                <?= do_shortcode( '[contact-form-7 id="150" title="Request"]' )?>
            </section>

        </main>
        <!-- end content -->

        <?php get_template_part("components/content", "header"); ?>

        <?php get_template_part("components/content", "footer"); ?>

<?php get_footer();?>