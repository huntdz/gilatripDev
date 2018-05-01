<?php

use Botble\Widget\AbstractWidget;

class CustomMenuFooterWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $widgetDirectory = 'custom-menu-footer';

    /**
     * CustomMenuWidget constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Custom Menu Footer'),
            'description' => __('Add a custom menu to your widget area.'),
            'menu_id' => null,
        ]);
    }
}