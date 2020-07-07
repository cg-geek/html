<?php

namespace Atom\Html\Component\Tag;

use Atom\Html\HtmlPlugin;

/**
 * ----------------------------------------------------------------------------------------------------
 * End
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class End implements EndInterface
{
    /**
     * Name
     *
     * @var    string
     * @since  1.0.0
     */
    protected $name;

    /**
     * Construct
     *
     * @param  string  $name
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }

    /**
     * Get
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function get() : string
    {
        return HtmlPlugin::tag(
            $this->name, 1
        );
    }
}
