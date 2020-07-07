<?php

namespace Atom\Html;

/**
 * ----------------------------------------------------------------------------------------------------
 * HtmlKernel
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class HtmlKernel extends AbstractHtmlKernel implements HtmlKernelInterface
{
    /**
     * Attribute
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function attribute(
        $name, $content
    ) : object {
        return self::createAttributeInstance()->attribute(
            $name, $content
        );
    }

    /**
     * Style
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function style(
        $name, $content
    ) : object {
        return self::createStyleInstance()->style(
            $name, $content
        );
    }

    /**
     * Tag
     *
     * @param  string  $name
     * @param  int  $type
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function tag(
        string $name, int $type
    ) : object {
        return self::createTagInstance(
            $name, $type
        );
    }
}
