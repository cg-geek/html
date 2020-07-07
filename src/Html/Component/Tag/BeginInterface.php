<?php

namespace Atom\Html\Component\Tag;

use Atom\Html\Component\Attribute\AttributeInterface;
use Atom\Html\Component\Style\StyleInterface;

/**
 * ----------------------------------------------------------------------------------------------------
 * BeginInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface BeginInterface
{
    /**
     * Construct
     *
     * @param  string  $name
     * @param  object  $attributes
     * @param  object  $styles
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        string $name, AttributeInterface $attributes, StyleInterface $styles
    );

    /**
     * Get
     *
     * @param  bool  $filled
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function get(
        bool $filled = false
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
