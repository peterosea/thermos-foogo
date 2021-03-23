<?php

/**
 * Google Fonts and Site all font
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function fonts()
{
  wp_enqueue_style('NanumSquareRound', 'https://cdn.rawgit.com/innks/NanumSquareRound/master/nanumsquareround.min.css', array(), null, false);
  wp_enqueue_style('FontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), null, false);
}
add_action('wp_enqueue_scripts', 'fonts');
