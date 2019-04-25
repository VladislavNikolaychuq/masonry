<?php

function getMenu($name) {
    $locations= get_nav_menu_locations();
    $menu_items= wp_get_nav_menu_items($locations["menu_header"]);
    $current_page_ID = get_the_ID();
    $formated_menu = [];
    foreach ($menu_items as $menu_item) {
        if($menu_item->object_id == $current_page_ID) {
            $current_page_item = 'id="is-current"';
        } else {
            $current_page_item = null;
        }
        $item = [
            "title" => $menu_item->title,
            "url" => $menu_item->url,
            "current_page_item" => $current_page_item
        ];
        $formated_menu[] = $item;
    }
    return $formated_menu;
}


