<?php
if ( ! defined( 'ABSPATH' ) ) :
    exit; // Exit if accessed directly
endif;

if (function_exists('vc_map')) :

    // TT Twitter feed element
    vc_map( array(
        'name'        => esc_html__( 'TT Spokesman Tweet', 'nominee' ),
        'base'        => 'tt_twitter_feed_spokesman',
        'icon'        => 'fa fa-twitter',
        'category'    => esc_html__( 'TT Elements', 'nominee' ),
        'description' => esc_html__( 'Show off latest twitter feed', 'nominee' ),
        'params'      => array(

            array(
                'type'        => 'textfield',
                'heading'     => esc_html__( 'Twitter Username', 'nominee' ),
                'param_name'  => 'twitter_user',
                'admin_label' => true,
                'description' => esc_html__( 'Enter twitter username', 'nominee' )
            ),

            array(
                'type'        => 'textfield',
                'heading'     => esc_html__( 'Max tweet number', 'nominee' ),
                'param_name'  => 'twitter_number',
                'admin_label' => true,
                'description' => esc_html__( 'Enter number of twitter that you want to show', 'nominee' )
            ),

            array(
                'type'        => 'textfield',
                'heading'     => esc_html__( 'Extra class name', 'nominee' ),
                'param_name'  => 'el_class',
                'admin_label' => true,
                'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'nominee' )
            ),
        )
    ));

    if (class_exists('WPBakeryShortCode')) {
        class WPBakeryShortCode_tt_Twitter_Feed_Spokesman extends WPBakeryShortCode {
        }
    }
endif;