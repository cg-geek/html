<?php

namespace Atom\Html\Component\Style;

use Atom\Html\Extension\Collection\CollectionDataInterface;
use Atom\Html\HtmlPlugin;

/**
 * ----------------------------------------------------------------------------------------------------
 * Style
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class Style implements StyleInterface
{
    /**
     * Collection
     *
     * @var    Atom\Html\Extension\Collection\CollectionDataInterface
     * @since  1.0.0
     */
    private $collection;

    /**
     * Construct
     *
     * @param  object  $collection
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        CollectionDataInterface $collection
    ) {
        $this->collection = $collection;
    }

    /**
     * Get
     *
     * @param  bool  $filled
     * @param  bool  $indent
     * @param  bool  $layout
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function get(
        bool $filled = true, bool $indent = false, bool $layout = true
    ) : string {
        return HtmlPlugin::styles(
            $this->getItems(), [$filled, $indent, $layout]
        );
    }

    /**
     * Get items
     *
     * @return array
     *
     * @since  1.0.0
     */
    public function getItems() : array
    {
        $items = $this->collection->all();

        $output = [];

        foreach($items as $item)
        {
            $output[$item->getName()] = $item->getContent();
        }

        return $output;
    }

    /**
     * Style
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function style(
        $name, $content
    ) : self {
        $this->collection->create(
            $name, $content
        );

        return $this;
    }
}
