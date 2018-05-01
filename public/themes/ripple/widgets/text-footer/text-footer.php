<?php

use Botble\Widget\AbstractWidget;

class TextFooterWidget extends AbstractWidget
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
    protected $widgetDirectory = 'text-footer';

    /**
     * CustomMenuWidget constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Text Footer'),
			'content' => __('Content'),
            'description' => __('Add a Text Footer to your widget area.'),
            'menu_id' => null,
        ]);
    }
}