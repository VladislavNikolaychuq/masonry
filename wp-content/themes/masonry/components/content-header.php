<!-- header -->
<header id="header">
    <div class="wrapper">
        <a href="#" class="logo"><img src="<?= DIRECT; ?>img/logo.png?ver1.0" alt=""/></a>
        <a class="mobile-button" href="#"><span></span></a>
        <nav class="nav">
            <?php
            $locations= get_nav_menu_locations();

            $menu_items= wp_get_nav_menu_items($locations['menu_header']);
            $currentPageID = get_the_ID();
            ?>

            <?php if(count($menu_items)>0): ?>
            <ul id="nav">

                <?php  foreach ($menu_items as $menu_item):

                if($menu_item->object_id == $currentPageID) {
                    $isCurrentPage = 'id="is-current"';
                } else {
                    $isCurrentPage = '';
                }
                ?>
                    <li><a <?= $isCurrentPage;?> href="<?= $menu_item->url;?>"><?= $menu_item->title; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif;?>

            <div class="soc">
                <a href="#"><img src="<?= DIRECT; ?>img/soc1.png?ver1.0" alt=""/></a>
                <a href="#"><img src="<?= DIRECT; ?>img/soc2.png?ver1.0" alt=""/></a>
            </div>
        </nav>
        <div class="head-phone">
            <a href="tel:89167868105" class="phone-link">8-916-786-81-05</a><br/>
            <a href="#pop-up1" class="call-ord fancy"><i><img src="<?= DIRECT; ?>img/ico1.png?ver1.0" alt=""/></i><span>ЗАКАЗАТЬ ЗВОНОК</span></a>
        </div>
    </div>
</header>
<!-- end header -->

