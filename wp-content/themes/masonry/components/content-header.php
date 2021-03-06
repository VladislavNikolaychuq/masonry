<!-- header -->
<header id="header">
    <div class="wrapper">
        <a href="<?= home_url(); ?>" class="logo"><img src="<?= DIRECT; ?>img/logo.png?ver1.0" alt=""/></a>
        <a class="mobile-button" href="#"><span></span></a>
        <nav class="nav">
            <?php
            $menu_items = getMenu("menu_header");
             if(count($menu_items)>0): ?>
            <ul id="nav">
                <?php  foreach ($menu_items as $menu_item): ?>
                    <li><a <?= is_null($menu_item) ? "" : $menu_item["current_page_item"]; ?> href="<?= $menu_item["url"]; ?>"><?= $menu_item["title"]; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif;?>
            <div class="soc">
                <a href="<?php  echo get_theme_mod( "mytheme_company-name" );?>"><img src="<?= DIRECT; ?>img/soc1.png?ver1.0" alt=""/></a>
                <a href="<?php  echo get_theme_mod( "mytheme_company-name1" );?>"><img src="<?= DIRECT; ?>img/soc2.png?ver1.0" alt=""/></a>
            </div>
        </nav>
        <div class="head-phone">
            <a href="tel:<?php  echo get_theme_mod( "mytheme_company-name2" );?>" class="phone-link"><?php  echo get_theme_mod( "mytheme_company-name2" );?></a><br/>
            <a href="#pop-up1" class="call-ord fancy"><i><img src="<?= DIRECT; ?>img/ico1.png?ver1.0" alt=""/></i><span>ЗАКАЗАТЬ ЗВОНОК</span></a>
        </div>
    </div>
</header>
<!-- end header -->

