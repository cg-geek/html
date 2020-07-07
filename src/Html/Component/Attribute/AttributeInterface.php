<?php

namespace Atom\Html\Component\Attribute;

use Atom\Html\Extension\Collection\CollectionDataInterface;

/**
 * ----------------------------------------------------------------------------------------------------
 * AttributeInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface AttributeInterface
{
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
    );

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
        bool $filled = false, bool $indent = false
    ) : string;

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
    ) : self;
}
