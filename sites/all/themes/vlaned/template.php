<?php

function vlaned_preprocess_html(&$variables) {
    $viewport = array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
        ),
    );
    drupal_add_html_head($viewport, 'viewport');
}


function vlaned_commerce_cart_empty_block() {
    return '';
}

