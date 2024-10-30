<?php
/**
 * 
 * @admin ~~// this is the widgets utilize
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function get_all_posts() {
    return get_posts([
        'post_type' => ['post', 'page'],
        'post_status' => 'publish',
        'numberposts' => -1
    ]);
}

function bwd_widgets_pages_all($widgetTypes) {
    $widget_counts = array_fill_keys($widgetTypes, 0);
    foreach (get_all_posts() as $post) {
        $elementor_data = json_decode(get_post_meta($post->ID, '_elementor_data', true), true);
        if (is_array($elementor_data)) {
            bwd_widgets_data($elementor_data, $widgetTypes, $widget_counts);
        }
    }
    return $widget_counts;
}

function bwd_widgets_data($elements, $widgetTypes, &$widget_counts) {
    foreach ($elements as $element) {
        if (isset($element['widgetType']) && in_array($element['widgetType'], $widgetTypes)) {
            $widget_counts[$element['widgetType']]++;
        }
        if (isset($element['elements']) && is_array($element['elements'])) {
            bwd_widgets_data($element['elements'], $widgetTypes, $widget_counts);
        }
    }
}

function bwd_total_count($typeBWDwidgets) {
    $used_widgets = array_fill_keys($typeBWDwidgets, false);
    foreach (get_all_posts() as $post) {
        $elementor_data = json_decode(get_post_meta($post->ID, '_elementor_data', true), true);
        if (is_array($elementor_data)) {
            type_elementor_data($elementor_data, $typeBWDwidgets, $used_widgets);
        }
    }
    return count(array_filter($used_widgets));
}

function type_elementor_data($elements, $typeBWDwidgets, &$used_widgets) {
    foreach ($elements as $element) {
        if (isset($element['widgetType']) && in_array($element['widgetType'], $typeBWDwidgets)) {
            $used_widgets[$element['widgetType']] = true;
        }
        if (isset($element['elements']) && is_array($element['elements'])) {
            type_elementor_data($element['elements'], $typeBWDwidgets, $used_widgets);
        }
    }
}

$widget_counts = bwd_widgets_pages_all($widgetTypes);
$_SESSION['widget_counts'] = $widget_counts;

$checKTypes = array_values($widgetTypes);
$bwdAllWidgets = count($checKTypes);
$used_widget_count = bwd_total_count($checKTypes);
$unused_widget_count = max($bwdAllWidgets - $used_widget_count, 0);

$_SESSION['used_widget_count'] = $used_widget_count;
$_SESSION['unused_widget_count'] = $unused_widget_count;
