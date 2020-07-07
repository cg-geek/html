<?php

namespace Atom\Html;

use Atom\Util\ArgHelper;
use Atom\Util\ArrHelper;
use Atom\Util\StrHelper;

/**
 * ----------------------------------------------------------------------------------------------------
 * HtmlPlugin
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class HtmlPlugin extends AbstractHtmlPlugin implements HtmlPluginInterface
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
    ) : string {
        $content = parent::toContent(
            $content
        );

        $filled = parent::isFilled(
            $setting, true
        );

        $indent = parent::isIndent(
            $setting, false
        );

        if(ArgHelper::isNullArray($content) && $filled)
        {
            return '';
        }

        $output = parent::getAttribute(
            $name, ArgHelper::implode($content, ' ')
        );

        return parent::get(
            $output, $indent
        );
    }

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
    ) : string {
        if(ArgHelper::isNullArray($items))
        {
            return '';
        }

        $filled = parent::isFilled(
            $setting, true
        );

        $indent = parent::isIndent(
            $setting, false
        );

        $output = [];
        foreach($items as $name => $content)
        {
            $output[$name] = self::attribute(
                $name, $content, [$filled, false]
            );
        }

        $output = ArgHelper::implode(
            $output, ' ', ['', ' ']
        );

        if(ArgHelper::isNullString($output))
        {
            return '';
        }

        return parent::get(
            $output, $indent
        );
    }

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
    ) : string {
        $content = parent::toContent(
            $content
        );

        $filled = parent::isFilled(
            $setting, true
        );

        $indent = parent::isIndent(
            $setting, false
        );

        $layout = parent::isLayout(
            $setting, false
        );

        if(ArgHelper::isNullArray($content) && $filled)
        {
            return '';
        }

        $output = parent::getStyle(
            $name, ArgHelper::implode($content, ' ')
        );

        if(!ArgHelper::isNullBool($layout))
        {
            $output = parent::getAttribute(
                'style', $output
            );
        }

        return parent::get(
            $output, $indent
        );
    }

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
    ) : string {
        if(ArgHelper::isNullArray($items))
        {
            return '';
        }

        $filled = parent::isFilled(
            $setting, true
        );

        $indent = parent::isIndent(
            $setting, false
        );

        $layout = parent::isLayout(
            $setting, true
        );

        $output = [];
        foreach($items as $name => $content)
        {
            $output[$name] = self::style(
                $name, $content, [$filled, false, false]
            );
        }

        $output = ArgHelper::implode(
            $output, ' ', ['', ' ']
        );

        if(ArgHelper::isNullString($output))
        {
            return '';
        }

        if(!ArgHelper::isNullBool($layout))
        {
            $output = parent::getAttribute(
                'style', $output
            );
        }

        return parent::get(
            $output, $indent
        );
    }

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
    ) : string {
        $output = StrHelper::trim($name);

        if(ArgHelper::isNullInt($type))
        {
            $filled = parent::isFilled(
                $setting, true
            );

            if(!ArgHelper::isNullArray($attributes))
            {
                $output .= self::attributes($attributes, [$filled, true]);
            }

            if(!ArgHelper::isNullArray($styles))
            {
                $output .= self::styles($styles, [$filled, true, true]);
            }
        }

        return parent::getTag(
            $output, $type
        );
    }
}
