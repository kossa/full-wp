<?php 
    
    $options[] = array(
        'name' => __('Footer', 'options_check'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('footer copyright text', 'options_check'),
        'desc' =>  __('You can put any HTML Tag', 'options_check'),
        'id' => 'footer_copyright',
        'std' => 'Copyright © 2015 Meet the Masters. All Rights Reserved. Website by <a href="http://raindropmarketing.com/">Raindrop Marketing</a>.',
        'type' => 'editor');