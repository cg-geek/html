<?php

namespace Atom\Html\Component\Tag;

/**
 * ----------------------------------------------------------------------------------------------------
 * EndInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface EndInterface
{
    /**
     * Construct
     *
     * @param  string  $name
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        string $name
    );

    /**
     * Get
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function get() : string;
}
