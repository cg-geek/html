<?php

namespace Atom\Html\Component\Style;

use Atom\Html\Extension\Collection\CollectionDataInterface;

/**
 * ----------------------------------------------------------------------------------------------------
 * StyleInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface StyleInterface
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
     * @param  bool  $layout
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function get(
        bool $filled = true, bool $indent = false, bool $layout = true
    ) : string;

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
    ) : self;
}
