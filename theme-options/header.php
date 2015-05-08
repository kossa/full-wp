<?php 
    
    $options[] = array(
        'name' => __('Header', 'options_check'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Logo', 'options_check'),
        'desc' => __('Please upload your logo', 'options_check'),
        'id' => 'logo_url',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Site tagline', 'options_check'),
        'id' => 'site_tagline',
        'std' => 'Historical, Culturally Diverse, Standards-Based Art Lessons to Inspire Young Artists',
        'type' => 'text');

    $options[] = array(
        'name' => __('Phone number', 'options_check'),
        'id' => 'phone_number',
        'std' => '(949) 215-1064',
        'type' => 'text');

    $options[] = array(
        'name' => __('Facebook', 'options_check'),
        'id' => 'facebook_url',
        'type' => 'text');

    $options[] = array(
        'name' => __('Twitter', 'options_check'),
        'id' => 'twitter_url',
        'type' => 'text');

    $options[] = array(
        'name' => __('Pinterest', 'options_check'),
        'id' => 'pinterest_url',
        'type' => 'text');