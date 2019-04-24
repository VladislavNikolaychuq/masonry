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
<?php if( have_rows('tasks') ): ?>
                    <div class="pols">s
    <?php
    $classes=['pol1','pol5','pol4','pol3','pol2','pol8','pol6','pol7','pol9','pol10'];

    while ( have_rows('tasks') ) : the_row();
        $name_task = get_sub_field('name_task');
        ?>
                        <div class="pol pol1"><img src="<?= DIRECT; ?>/img/m4.png?ver1.0" alt=""/></div>




                        <div class="pol pol5"><img src="<?= DIRECT; ?>/img/m9.png?ver1.0" alt=""/></div>
                        <div class="pol pol4"><img src="<?= DIRECT; ?>/img/m8.png?ver1.0" alt=""/></div>
                        <div class="pol pol3"><img src="<?= DIRECT; ?>/img/m7.png?ver1.0" alt=""/></div>
                        <div class="pol pol2"><img src="<?= DIRECT; ?>/img/m6.png?ver1.0" alt=""/></div>
                        <div class="pol pol8"><img src="<?= DIRECT; ?>/img/m12.png?ver1.0" alt=""/></div>
                        <div class="pol pol6"><img src="<?= DIRECT; ?>/img/m10.png?ver1.0" alt=""/></div>
                        <div class="pol pol7"><img src="<?= DIRECT; ?>/img/m11.png?ver1.0" alt=""/></div>
                        <div class="pol pol9"><img src="<?= DIRECT; ?>/img/m13.png?ver1.0" alt=""/></div>
                        <div class="pol pol10"><img src="<?= DIRECT; ?>/img/m14.png?ver1.0" alt=""/></div>
                    </div>
                </div>
            </section>
            <section class="section-apply">
                <div class="apply">
                    <h2>ОСТАВИТЬ ЗАЯВКУ</h2>
                    <div class="form-block">
                        <div class="form-row"><input type="text" class="t-inp name-inp" placeholder="Введите Ваше имя"/></div>
                        <div class="form-row"><input type="text" class="t-inp mail-inp" placeholder="Введите Ваш e-mail"/></div>
                        <div class="form-row"><input type="text" class="t-inp tel-inp" placeholder="Введите Ваш номер телефона"/></div>
                        <div class="form-row"><textarea placeholder="Введите Ваше сообщение"></textarea></div>
                        <div class="form-row"><button class="btn btn-bord">ОТПРАВИТЬ</button></div>
                    </div>
                </div>
            </section>

        </main>
        <!-- end content -->

        <?php get_template_part("components/content", "header"); ?>

        <?php get_template_part("components/content", "footer"); ?>

<?php get_footer();?>