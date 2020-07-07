<?php

namespace Atom\Html\Extension\Collection;

/**
 * ----------------------------------------------------------------------------------------------------
 * CollectionItemInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface CollectionItemInterface
{
    /**
     * Construct
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        $name, $content
    );

    /**
     * Clone
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __clone();

    /**
     * Get name
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function getName() : string;

    /**
     * Get content
     *
     * @return array
     *
     * @since  1.0.0
     */
    public function getContent() : array;

    /**
     * Create
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function create(
        $name, $content
    ) : self;

    /**
     * Update
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function update(
        $name, $content
    ) : self;
}
