<?php

namespace Atom\Html;

use Atom\Util\ArgHelper;
use Atom\Util\ArrHelper;
use Atom\Util\StrHelper;

/**
 * ----------------------------------------------------------------------------------------------------
 * AbstractHtmlPlugin
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
abstract class AbstractHtmlPlugin
{
    /**
     * Get attribute
     *
     * @param  string  $name
     * @param  string  $content
     *
     * @return string
     *
     * @since  1.0.0
     */
    protected static function getAttribute(
        string $name, string $content
    ) : string {
        return StrHelper::trim($name).'='.'"'.StrHelper::trim($content).'"';
    }

    /**
     * Get style
     *
     * @param  string  $name
     * @param  string  $content
     *
     * @return string
     *
     * @since  1.0.0
     */
    protected static function getStyle(
        string $name, string $content
    ) : string {
        return StrHelper::trim($name).':'.' '.StrHelper::trim($content).';';
    }

    /**
     * Get tag
     *
     * @param  string  $data
     * @param  int  $type
     *
     * @return string
     *
     * @since  1.0.0
     */
    protected static function getTag(
        string $data, int $type
    ) : string {
        if(ArgHelper::isNullInt($type))
        {
            return "<$data>";
        }
        else
        {
            return "</$data>";
        }
    }

    /**
     * Get
     *
     * @param  string  $output
     * @param  bool  $indent
     *
     * @return string
     *
     * @since  1.0.0
     */
    protected static function get(
        string $output, bool $indent = false
    ) : string {
        if(ArgHelper::isNullString($output))
        {
            return '';
        }

        $output = StrHelper::trim(
            $output
        );

        if(ArgHelper::isNullBool($indent))
        {
            return $output;
        }

        return ' '.$output;
    }

    /**
     * Is filled
     *
     * @param  array  $setting
     * @param  bool  $default
     *
     * @return bool
     *
     * @since  1.0.0
     */
    protected static function isFilled(
        array $setting, bool $default = false
    ) : bool {
        if(ArrHelper::exists($setting, 0))
        {
            $value = $setting[0];
        }
        else
        {
            if(ArrHelper::exists($setting, 'filled'))
            {
                $value = $setting['filled'];
            }
            else
            {
                $value = $default;
            }
        }

        return (bool) $value;
    }

    /**
     * Is indent
     *
     * @param  array  $setting
     * @param  bool  $default
     *
     * @return bool
     *
     * @since  1.0.0
     */
    protected static function isIndent(
        array $setting, bool $default = false
    ) : bool {
        if(ArrHelper::exists($setting, 1))
        {
            $value = $setting[1];
        }
        else
        {
            if(ArrHelper::exists($setting, 'indent'))
            {
                $value = $setting['indent'];
            }
            else
            {
                $value = $default;
            }
        }

        return (bool) $value;
    }

    /**
     * Is layout
     *
     * @param  array  $setting
     * @param  bool  $default
     *
     * @return bool
     *
     * @since  1.0.0
     */
    protected static function isLayout(
        array $setting, bool $default = false
    ) : bool {
        if(ArrHelper::exists($setting, 2))
        {
            $value = $setting[2];
        }
        else
        {
            if(ArrHelper::exists($setting, 'layout'))
            {
                $value = $setting['layout'];
            }
            else
            {
                $value = $default;
            }
        }

        return (bool) $value;
    }

    /**
     * To content
     *
     * @param  array|string  $input
     *
     * @return array
     *
     * @since  1.0.0
     */
    protected static function toContent(
        $input
    ) : array {
        if(ArgHelper::isTypeString($input))
        {
            $input = StrHelper::replace(
                $input, '|', ['| ', ' | ', ' |']
            );

            $input = ArgHelper::explode(
                $input, '|'
            );
        }

        $input = ArrHelper::delete(
            $input, ['', ' ']
        );

        return $input;
    }
}
