<!-- footer -->
<footer id="footer">
    <section class="sec-cont">
        <div class="contacts">
            <h2>контакты</h2>
            <div class="contact-item contact-phone">
                <a href=<?php  echo get_theme_mod( "mytheme_company-name3" );?>><i><img src="<?= DIRECT; ?>img/ico2.png?ver1.0" alt=""/></i><span><?php  echo get_theme_mod( "mytheme_company-name3" );?></span></a>
            </div>
            <div class="contact-item contact-links">
                <div class="contact-link"><a href="mailto:<?php  echo get_theme_mod( "mytheme_company-name4" );?>"><i><img src="<?= DIRECT; ?>img/soc3.png?ver1.0" alt=""/></i><span><?php  echo get_theme_mod( "mytheme_company-name4" );?></span></a></div>
                <div class="contact-link"><a href="http://<?php echo get_theme_mod( "mytheme_company-name5" );?>"><i><img src="<?= DIRECT; ?>img/soc4.png?ver1.0" alt=""/></i><span><?php  echo get_theme_mod( "mytheme_company-name5" );?></span></a></div>
                <div class="contact-link"><a href="http://<?php  echo get_theme_mod( "mytheme_company-name6" );?>"><i><img src="<?= DIRECT; ?>img/soc5.png?ver1.0" alt=""/></i><span><?php  echo get_theme_mod( "mytheme_company-name6" );?></span></a></div>
                <div class="contact-link"><a href="http://<?php  echo get_theme_mod( "mytheme_company-name7" );?>"><i><img src="<?= DIRECT; ?>img/soc6.png?ver1.0" alt=""/></i><span><?php  echo get_theme_mod( "mytheme_company-name7" );?></span></a></div>
            </div>
            <a href="#pop-up2" class="btn btn-green fancy">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</a>
        </div>
    </section>
    <div class="foot-bot">
        <div class="foot-logo"><a href="<?= home_url(); ?>"><img src="<?= DIRECT; ?>img/logo.png?ver1.0" alt=""/></a></div>
        <div class="foot-nav">
            <?php
            $menu_items= getMenu("menu_footer");
            if(count($menu_items)>0): ?>
                <ul id="nav">
                    <?php  foreach ($menu_items as $menu_item): ?>
                        <li><a <?= is_null($menu_item) ? "" : $menu_item["current_page_item"]; ?> href="<?= $menu_item["url"]; ?>"><?= $menu_item["title"]; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif;?>
        </div>
    </div>
</footer>
<!-- end footer -->
