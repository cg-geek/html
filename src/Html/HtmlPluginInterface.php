<?php

namespace Atom\Html;

/**
 * ----------------------------------------------------------------------------------------------------
 * HtmlPluginInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
interface HtmlPluginInterface
{
    /**
     * Attribute
     *
     * @param  string  $name
     * @param  array|string  $content
     * @param  array  $setting
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function attribute(
        $name, $content, $setting = []
    ) : string;

    /**
     * Attributes
     *
     * @param  array  $items
     * @param  array  $setting
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function attributes(
        $items, $setting = []
    ) : string;

    /**
     * Style
     *
     * @param  string  $name
     * @param  array|string  $content
     * @param  array  $setting
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function style(
        $name, $content, $setting = []
    ) : string;

    /**
     * Styles
     *
     * @param  array  $items
     * @param  array  $setting
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function styles(
        $items, $setting = []
    ) : string;

    /**
     * Tag
     *
     * @param  string  $name
     * @param  int  $type
     * @param  array  $attributes
     * @param  array  $styles
     * @param  array  $setting
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function tag(
        $name, $type, $attributes = [], $styles = [], $setting = []
    ) : string;
}
