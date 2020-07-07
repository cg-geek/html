<?php

namespace Atom\Html;

/**
 * ----------------------------------------------------------------------------------------------------
 * HtmlKernelInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface HtmlKernelInterface
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
    ) : object;

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
    ) : object;

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
    ) : object;
}
