<?php

class CORE_Register_Block_Type {

    function __construct() {

        add_action('acf/init', [$this, 'acf_init']);
    }

    function acf_init() {

        if (function_exists('acf_register_block_type')) {

            acf_register_block_type([
                'name' => 'reparo-accordion',
                'title' => 'Accordion',
                'description' => 'An accordion block',
                'render_template' => 'blocks/accordion/accordion.php',
                'category' => 'formatting',
                'icon' => 'list-view',
                'keywords' => ['accordion', 'bootstrap']
            ]);
        }
    }
}

new CORE_Register_Block_Type;
