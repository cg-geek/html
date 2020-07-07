<?php

namespace Atom\Html\Extension\Collection;

use Atom\Util\ArgHelper;
use Atom\Util\ArrHelper;
use Atom\Util\StrHelper;

/**
 * ----------------------------------------------------------------------------------------------------
 * CollectionData
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class CollectionData implements CollectionDataInterface
{
    /**
     * Items
     *
     * @var    array
     * @since  1.0.0
     */
    private $items = [];

    /**
     * Object
     *
     * @var    object
     * @since  1.0.0
     */
    private $item;

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
    ) {
        $this->item = $item;
    }

    /**
     * All
     *
     * @return array
     *
     * @since  1.0.0
     */
    public function all() : array
    {
        return $this->items;
    }

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
    ) : object {
        return $this->items[$name];
    }

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
    ) : bool {
        return ArrHelper::exists(
            $this->items, $name
        );
    }

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
    ) : self {
        $this->items[$name] = $this->item($name)->create(
            $name, $content
        );

        return $this;
    }

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
    ) : self {
        $this->items[$name] = $this->item($name)->update(
            $name, $content
        );

        return $this;
    }

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
    ) : self {
        unset($this->items[$name]);

        return $this;
    }

    /**
     * Item
     *
     * @param  string  $name
     *
     * @return object
     *
     * @since  1.0.0
     */
    protected function item(
        string $name
    ) : object {
        if($this->has($name))
        {
            $item = $this->items[$name];
        }
        else
        {
            $item = (clone $this->item);
        }

        return $item;
    }
}
