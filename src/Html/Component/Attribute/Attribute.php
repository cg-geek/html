<?php

namespace Atom\Html\Component\Attribute;

use Atom\Html\Extension\Collection\CollectionDataInterface;
use Atom\Html\HtmlPlugin;

/**
 * ----------------------------------------------------------------------------------------------------
 * Attribute
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class Attribute implements AttributeInterface
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
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function get(
        bool $filled = true, bool $indent = false
    ) : string {
        return HtmlPlugin::attributes(
            $this->getItems(), [$filled, $indent]
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
     * Attribute
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function attribute(
        $name, $content
    ) : self {
        $this->collection->create(
            $name, $content
        );

        return $this;
    }
}
