<?php

namespace Atom\Html\Extension\Collection;

/**
 * ----------------------------------------------------------------------------------------------------
 * CollectionDataInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface CollectionDataInterface
{
    /**
     * Construct
     *
     * @param  array  $items
     * @param  object  $item
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        CollectionItemInterface $item
    );

    /**
     * All
     *
     * @return array
     *
     * @since  1.0.0
     */
    public function all() : array;

    /**
     * Get
     *
     * @param  string  $name
     *
     * @return object
     *
     * @since  1.0.0
     */
    public function get(
        string $name
    ) : object;

    /**
     * Has
     *
     * @param  string  $name
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public function has(
        string $name
    ) : bool;

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
        string $name, $content
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
        string $name, $content
    ) : self;

    /**
     * Delete
     *
     * @param  string  $name
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function delete(
        string $name
    ) : self;
}
