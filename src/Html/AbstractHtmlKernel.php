<?php

namespace Atom\Html;

use Atom\Html\Component\Attribute\Attribute;
use Atom\Html\Component\Style\Style;
use Atom\Html\Component\Tag\Begin;
use Atom\Html\Component\Tag\End;

use Atom\Html\Extension\Collection\CollectionData;
use Atom\Html\Extension\Collection\CollectionItem;

/**
 * ----------------------------------------------------------------------------------------------------
 * AbstractHtmlKernel
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
abstract class AbstractHtmlKernel
{
    /**
     * Create attribute instance
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function createAttributeInstance() : object
    {
        return new Attribute(
            new CollectionData(new CollectionItem)
        );
    }

    /**
     * Create style instance
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function createStyleInstance() : object
    {
        return new Style(
            new CollectionData(new CollectionItem)
        );
    }

    /**
     * Create tag instance
     *
     * @param  string  $name
     * @param  int  $type
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function createTagInstance(
        string $name, int $type
    ) : object {
        if(empty($type))
        {
            return new Begin(
                $name, self::createAttributeInstance(), self::createStyleInstance()
            );
        }
        else
        {
            return new End(
                $name
            );
        }
    }
}
