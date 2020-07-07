<?php

namespace Atom\Html\Component\Tag;

use Atom\Html\Component\Attribute\AttributeInterface;
use Atom\Html\Component\Style\StyleInterface;
use Atom\Html\HtmlPlugin;

/**
 * ----------------------------------------------------------------------------------------------------
 * Begin
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class Begin implements BeginInterface
{
    /**
     * Name
     *
     * @var    string
     * @since  1.0.0
     */
    protected $name;

    /**
     * Attributes
     *
     * @var    Atom\Html\Component\AttributeInterface
     * @since  1.0.0
     */
    protected $attributes;

    /**
     * Styles
     *
     * @var    Atom\Html\Component\StyleInterface
     * @since  1.0.0
     */
    protected $styles;

    /**
     * Construct
     *
     * @param  string  $name
     * @param  object  $attributes
     * @param  object  $styles
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        string $name, AttributeInterface $attributes, StyleInterface $styles
    ) {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->styles = $styles;
    }

    /**
     * Get
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function get(
        bool $filled = true
    ) : string {
        $attributes = $this->attributes->getItems();
        $styles = $this->styles->getItems();

        return HtmlPlugin::tag(
            $this->name, 0, $attributes, $styles, [$filled]
        );
    }

    /**
     * Attribute
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function attribute(
        $name, $content
    ) : self {
        $this->attributes->attribute(
            $name, $content
        );

        return $this;
    }

    /**
     * Style
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function style(
        $name, $content
    ) : self {
        $this->styles->style(
            $name, $content
        );

        return $this;
    }
}
