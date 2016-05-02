<?php

/**
 * AIT WordPress Theme
 *
 * Copyright (c) 2012, Affinity Information Technology, s.r.o. (http://ait-themes.club)
 */


$latteParams['category'] = new WpLatteCategoryEntity($wp_query->queried_object);
//$latteParams['posts'] = WpLatte::createPostEntity($wp_query->posts);
//WPLatte::createTemplate(basename(__FILE__, '.php'), $latteParams)->render();

$Post_Category = $wp_query->queried_object->slug;
$order = 'DESC';
$orderby = 'date';
$GetPost = new WP_Query(array('post_type' => 'post','posts_per_page'=>10,'post_status' => 'publish','category_name' =>$Post_Category,
'orderby'=>$orderby ,'order'=>$order)); 
$latteParams['posts'] = WpLatte::createPostEntity($GetPost);
WPLatte::createTemplate(basename(__FILE__, '.php'), $latteParams)->render();
